<?php

namespace App\Http\Controllers\User;

use App\Model\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Category;

class PostController extends Controller
{
    public function post(Post $post){

        $posts = Post::where('status',1 )->orderBy('created_at', 'DESC')->paginate(7);

        $categories = Category::all();

        return view('user.post', compact('post', 'categories', 'posts'));

    }
    
}
