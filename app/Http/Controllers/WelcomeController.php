<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;

class WelcomeController extends Controller
{
    public function index()
    {

        $search = request()->query('search');

        if($search) {
           $posts = Post::where('title','LIKE',"%{$search}%")->paginate(2);
        } else {
            $posts = Post::paginate(2);
        }

        return view('welcome')
                ->withCategories(Category::all())
                ->withTags(Tag::all())
                ->with('posts', $posts);
    }
}
