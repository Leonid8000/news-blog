<?php

namespace App\Http\Controllers\User;

use App\Model\user\Category;
use App\Model\user\Post;
use App\Model\user\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function index(){

        $categories = Category::all();

        $pos = Post::where('status',1)->orderBy('created_at', 'DESC')->paginate(15);

        $posts = Post::where([
                ['status',1],
                ['id', '!=', $pos[0]->id],
                ['id', '!=', $pos[1]->id],
                ['id', '!=', $pos[2]->id],
                ['id', '!=', $pos[3]->id],
                ['id', '!=', $pos[4]->id],
            ]
        )->orderBy('created_at', 'DESC')->paginate(30);

        $postFirst = $pos[0];

        $postsFour = Post::where([
            ['status',1],
            ['id', '!=', $pos[0]->id],
        ])->orderBy('created_at', 'DESC')->take(4)->get();


        return view('user.blog', compact('posts', 'categories', 'postFirst', 'postsFour'));
        
    }

    public function tag(Tag $tag){

        $posts = $tag->posts();

        $categories = Category::all();

        return view('user.category_tag', compact('posts', 'categories'));

    }

    public function category(Category $category){

//        return $category = Category::where('slug', $slug)->get();

        $posts = $category->posts();

        $categories = Category::all();

        return view('user.category_tag', compact('posts', 'categories'));
    }



}
