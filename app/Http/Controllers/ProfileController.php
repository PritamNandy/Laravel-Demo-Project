<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class ProfileController extends Controller
{
    function index() {
        return view('profile');
    }

    public function profileUpdate(Request $request) {
        //Validation rules
        $request->validate([
            'name' => 'required|min:6|string|max:255',
            'email' => 'required|email|string|max:255'
        ]);
        $user = Auth::user();
        $user->name =  $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        $request->session()->flash('message', 'Profile Updated!');
        return back();
    }

    public function avatarChange() {
        return view('profileavatar');
    }

    public function updateAvatar(Request $request) {
        if($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => 'required|image|dimensions:min_width:250px|mimes:jpeg,png',
            ]);
            $avatar = $request->file('avatar');
            $filename = time().".".$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250, 250)->save(public_path('/img/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return back()->with('message','Profile Picture Updated');
    }
}
