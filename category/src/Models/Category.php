<?php

namespace Shawosy\Category\Models;
use Shawosy\Category\Models\Subcategory;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'url', 'icon', 'wherevalue'];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {
            // $category->posts()->delete();
        });
    }

    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }

    public function subcategory()
    {
        return $this->hasMany('Subcategory');
    }
    
}
