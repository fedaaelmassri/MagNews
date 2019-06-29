<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function Categories()
    {
        return $this->belongsToMany(Category::class,category_posts);
    }
}
