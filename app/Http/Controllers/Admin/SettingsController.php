<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }

    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());
        return back()->withStatus(__('Profile successfully updated.'));
    }

    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);
        return back()->withStatusPassword(__('Password successfully updated.'));
    }
}
