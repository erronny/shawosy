<?php

namespace Shawosy\Page\Models;


use App\User;
use App\Tag;
use App\Comment;
use App\Category;
use App\Subcategory;



use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = ['name', 'url', 'title', 'detail','is_published'];
        

    

    
}


