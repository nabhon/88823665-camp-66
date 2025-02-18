<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function __construct(){
        $user = session()->get('user');
        if(!$user){
            return redirect('/login');
        }
    }


    function home(){
        return view('home');
    }
}
