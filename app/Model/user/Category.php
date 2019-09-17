<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function posts(){

        return $this->belongsToMany('App\Model\user\Post', 'category_posts')->orderBy('created_at', 'DESC')->paginate(15);

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
