<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //show main page
    public function user_no_auth() {
        return view('page_for_no_auth_user');
    }

    //show login registration
    public function registr_user(){

        $titles = "ЛНР - Регистрация";

        return view('auth/registration')->with('titles', $titles);
    }

    //show login page
    public function login_user(){

        $titles = "ЛНР - Авторизация";

        return view('auth/login')->with('titles', $titles);
    }
}
