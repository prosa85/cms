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
        return view('welcome')
                ->withCategories(Category::all())
                ->withTags(Tag::all())
                ->withPosts(Post::all());
    }
}
