<?php

namespace Shawosy\Category\Models;

use Shawosy\Category\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'url', 'icon', 'wherevalue'


    ];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {
            $category->posts()->delete();
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


     public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
}
