<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function ajaxQuery(){
        $msg = 'This password not confirm';
        return response()->json(array('msg'=> $msg),200);
    }
}
