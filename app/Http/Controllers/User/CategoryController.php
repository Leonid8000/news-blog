<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Category;

class CategoryController extends Controller
{
    public function categories(){

        $categories = Category::all();

        return view('user.blog', compact('categories'));
        
    }
}
