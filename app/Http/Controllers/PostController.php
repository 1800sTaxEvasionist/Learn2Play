<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {    
        $title = '';
        $search = ' with "' . request('search') . '"';

        if(request('search') == '') {
            $title = '';
        } else {
            $title = $search;
        }

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            if(request('search') == '') {
                $title = ' in ' . $category->name;
            } else {
                $title = $search . ' in ' . $category->name;
            }
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            if(request('search') == '') {
                $title = ' by @' . $author->username;
            } else {
                $title = $search . ' by ' . $author->username;
            }
        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            // 'posts' => Post::all()
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(12)->withQueryString()
        ]);
    }

    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(12)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
