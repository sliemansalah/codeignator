<?php

namespace App\Controllers;

class Posts extends BaseController
{
    public function index()
    {
        // echo view('partials/header');
        return view('posts/index');
    }
}
