<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostController extends Controller
{
    function __construct(Post $post, Category $category)
    {
        $this->post = $post;
        $this->category = $category;
    }

    public function index(Request $request)
    {
        return response()->view('posts.index');
    }

    public function form(Request $request)
    {
        $categories = $this->category->all();
        return response()->view('posts.form', ['categories' => $categories]);
    }

    public function save(Request $request)
    {
        $this->post->title = $request->title;
        $this->post->content = $request->content;
        $this->post->category_id = $request->category_id;
        $this->post->save();

        return redirect()->route('posts.index');
    }
}
