<?php

namespace App\Controllers;

use App\Models\PostModel;

class Posts extends BaseController
{
    public function index()
    {
        $data= new PostModel;
        return view('posts/index', ["posts" => $data->findAll()]);
    }
    public function show($id) 
    {
        $data= new PostModel;
        return view('posts/show', ["post" => $data->find($id)]);
    }
}
