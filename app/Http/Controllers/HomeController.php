<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function reviews()
    {
        $reviews = Review::where('status', true)->paginate(10);
        return view('reviews', compact('reviews'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function admin()
    {
        return redirect()->route('admin.home');
    }
}
