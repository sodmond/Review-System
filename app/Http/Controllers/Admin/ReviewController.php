<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('status', true)->paginate(10);
        return view('admin.reviews_approved', compact('reviews'));
    }

    public function pending()
    {
        $reviews = Review::where('status', false)->paginate(10);
        return view('admin.reviews_pending', compact('reviews'));
    }

    public function get($id)
    {
        $review = Review::find($id);
        return view('admin.review', compact('review'));
    }

    public function approve($id,Request $request)
    {
        if (isset($request->approve)) {
            $review = Review::find($id);
            $review->status = true;
            $review->save();
            return back()->with('success', 'Review have been approved');
        }
        return redirect()->route('admin.home');
    }

    public function trash($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect()->route('admin.home')->with('success', 'Review has been deleted');
    }
}
