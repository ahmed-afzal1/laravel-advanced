<?php

namespace App\Http\Controllers;

use App\Post;
use App\QueryFilters\Active;
use App\QueryFilters\Sort;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index()
    {
        $posts = app(Pipeline::class)
                    ->send(Post::query())
                    ->through([
                        Active::class,
                        Sort::class
                    ])
                    ->thenReturn()
                    ->get();

        return view('posts.index',compact('posts'));
    }
}
