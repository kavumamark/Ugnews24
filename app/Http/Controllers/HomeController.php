<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view("main.index");

    }

     function head(){
        return "This is the head";

    }
}
