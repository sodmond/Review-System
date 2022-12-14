<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function new(Request $request)
    {
        $this->validate($request, [
            'email' => ['bail', 'required', 'email:rfc,dns'],
            'name' => ['required', 'max:255'],
            'rating' => ['required', 'integer'],
            'comment' => ['required', 'max:500'],
        ]);
        $redirectUrl = route('home').'#reviewFormSection';
        DB::beginTransaction();
        try {
            Review::create($request->except('_token'));
            DB::commit();
            return redirect($redirectUrl)->with('success', 'Your review has been submitted and will display upon approval.');
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return redirect($redirectUrl)->withErrors(['rev_err' => 'Review not submitted, pls try again.']);
        }
    }
}
