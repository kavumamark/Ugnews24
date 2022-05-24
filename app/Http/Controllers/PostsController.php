<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function posts(){
        return view("main.posts");
    }

    function createpost(){
        return "This is the new post";
    }

    function post(){
        return "This is a single post";
    }

    function delete_post(){
        return "This is the delete post";
    }
}
