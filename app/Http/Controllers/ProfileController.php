<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request) {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        if(!$validate) {
            return Redirect::route('profile.update')->with('status', 'profile-error');
        }

        $request->user()->name = $request->name;
        $request->user()->save();

        return Redirect::route('profile.update')->with('status', 'پروفایل با موفقیت بروزرسانی شد');
    }
    public function logout() {
        Auth::logout();
        return Redirect::to('/');
    }
}
