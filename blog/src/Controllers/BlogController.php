<?php

namespace Shawosy\Blog\Controllers;


use Illuminate\Http\Request;

use App\General;

use App\Pages;
use Shawosy\Blog\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    

    

   





   
    
    

    public function index()
    {
        $categories = Category::with('subcategory')->get();
         $subcategories = Subcategory::orderBy('id','desc')->get();
    	$posts = Post::get()->all();
        return view('shawosy::ui.blog.index', compact('posts', 'categories', 'subcategories'));
    }
    public function post($id)
    {
        $categories = Category::with('subcategory')->get();
         $subcategories = Subcategory::orderBy('id','desc')->get();
        // $settings = General::orderBy('id','desc')->limit('1')->get();

        //$id = str_replace('-',' ',$id); 
        $postquery = Post::orderBy('id','DESC');
        $postquery->where('slug',$id);
        $post = $postquery->first();

        return view('shawosy::ui.blog.single', compact('post', 'categories', 'subcategories'));
    }





   







    


}

