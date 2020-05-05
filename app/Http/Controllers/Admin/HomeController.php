<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('admin.index');
    }


    public function getProfile(Request $request) {
        return view('admin.profile')->with('user', \Auth::user());
    }

    public function handleProfileForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $user = \Auth::guard('admin')->user();

        $user->name = $request->name;

        if ($request->password) {
            $user->password = bcrypt( $request->get('password'));
        }

        $user->update();


        alert('Your profile has been changed');

        return redirect( route('admin.profile') );

    }


}
