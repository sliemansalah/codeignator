<?php

namespace App\Controllers;

use App\Models\PostModel;

class Posts extends BaseController
{
    public function index()
    {
        // echo view('partials/header');

        $data= new PostModel;
        return view('posts/index', ["posts" => $data->findAll()]);
    }
}
