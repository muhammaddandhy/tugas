<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('post', [
            'title' => 'Semua Dokumentasi' . $title,
            'active' => 'post',
            // 'post' => post::all()/gunakan "paginate(10)" untuk mengganti PAGINATE & "->withQueryString()" & juga panggil echo di post dengan ($post->links())
            'post' => post::latest()->filter(request(['cari', 'category', 'author']))->get()
        ]);
    }

    public function show(Post $posts)
    {
        return view('posts', [
            'title' => 'Single Post',
            'active' => 'post',
            'post' => $posts
        ]);
    }
}
