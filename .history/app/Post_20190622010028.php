<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    
    public function getStatusAttribute()//Accessor post_status   يصبح اسم حقل (ststus)
    {
        return  ucfirst($this->post_status);
    }
    public function Categories()
    {
        return $this->belongsToMany(Category::class,'category_posts');
    }
}
