<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class ChangePasswordController extends Controller
{
    public function index() {
        return view('changepassword');
    }

    public function changePassword(Request $request) {
        if(!(Hash::check($request->input('current_password'), Auth::user()->password))) {
            return back()->with('error', 'Current Password Does not match');
        }
        if(strcmp($request->input('current_password'), $request->input('new_password')) == 0) {
            return back()->with('error', 'Your new password can not be same as your current password');
        }
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed'
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->input('new_password'));
        $user->save();
        return back()->with('message','Password Changed Successfully');
    }
}
