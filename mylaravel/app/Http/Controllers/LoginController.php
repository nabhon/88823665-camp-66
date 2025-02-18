<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }

    function login(Request $req){
        $user = User::where('email',$req->email)->first();
        //print_r($user);
        if((Hash::check($req->password, $user->password))){
            session()->forget('error');
            session(['user'=>$user]);
            return redirect('/');
        } else{
            session(['error'=> 'ข้อมูลการเข้าสู่ระบบไม่ถูกต้อง']);
            return view('login', ['email'=>$req->email]);
        }
        //print_r ($req->email);
        //print_r ($req->password);
        //return rediret ('/');
    }
}
