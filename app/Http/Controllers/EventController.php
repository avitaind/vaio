<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;



class EventController extends Controller
{
    //
    public function registration(){
        
        return view('event.registration');
    }


    public function login(){
        
        return view('event.login');
    }


    public function eventRegistration(Request $request){
        
        $this->validate($request, [
            'name'      => 'required|',
            'email'     => 'required|string|email|max:255|unique:vaio_user_db.events',
            'phone'     => 'required|digits:10|unique:vaio_user_db.events',

           ]);

        $event = new Event([
            'name'     => $request->input('name'),
            'email'     => $request->input('email'),
            'phone'     => $request->input('phone'),

          ]);

         $event->save(); 
         return redirect()->back()->with("status", "Thanks for registering ! You shall recieve an email shortly ");



    }



    
    public function eventLogin(Request $request){
        
        $this->validate($request, [
            'name'      => 'required|',
            'email'     => 'required|string|email|max:255|unique:vaio_user_db.events',
            'phone'     => 'required|string|phone|unique:vaio_user_db.events',

           ]);

        $event = new Event([
            'name'     => $request->input('name'),
            'email'     => $request->input('email'),
            'phone'     => $request->input('phone'),

          ]);

         $event->save(); 
         return redirect()->back()->with("status", "Thanks for Subscribing, You will get launch event link shortly.");



    }



}
