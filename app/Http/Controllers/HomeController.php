<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::where('status', false)->paginate(10);
        return view('home', compact('reviews'));
    }

    public function admin()
    {
        return redirect()->route('admin.home');
    }
}
