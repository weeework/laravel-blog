<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => '1', 'title' => 'Post 1', 'body' => 'Body post in ID 1'],
            ['id' => '2', 'title' => 'Post 2', 'body' => 'Body post in ID 2'],
            ['id' => '3', 'title' => 'Post 3', 'body' => 'Body post in ID 3'],
            ['id' => '4', 'title' => 'Post 4', 'body' => 'Body post in ID 4'],
        ];

        echo '<ul>';
        foreach ($posts as $post) {
            echo '<li> <a href="' . route('post.detail', $post['id']) . '" >' . $post['title'] . ' </a></li>';
        }
        echo '</ul>';
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        return dd($request->all());
    }
}
