<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function restore(Request $request){
        $hash = array_key_first($request->query());
        if ($hash)
            return view('auth.update', ['hash' => $hash]);
        return view('auth.restore');
    }

    public function confirm(){
        return view('auth.confirmation');
    }

    public function signup(){
        return view('auth.signup');
    }
}
