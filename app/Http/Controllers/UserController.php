<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Request = new Request;
        $param = $Request->all();
        var_dump($param);
        echo __METHOD__;
    }
}
