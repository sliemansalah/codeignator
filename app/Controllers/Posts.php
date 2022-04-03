<?php

namespace App\Controllers;

class Posts extends BaseController
{
    public function index()
    {
        // echo view('partials/header');

        $data= [
            [
                "id" => 1,
                "title" => "post1",
                "description" => "description1",
            ],
            [
                "id" => 2,
                "title" => "post2",
                "description" => "description2",
            ],
        ];
        return view('posts/index', ["posts" => $data]);
    }
}
