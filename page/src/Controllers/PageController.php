<?php

namespace Shawosy\Page\Controllers;


use Illuminate\Http\Request;
use Shawosy\Page\Models\Pages;
use App\User;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Subcategory;

class PageController extends Controller
{
    
    public function uipages($name)
    
    {
        

    	 $categories = Category::with('subcategory')->get();
         $subcategories = Subcategory::orderBy('id','desc')->get();
       
        
        $name = str_replace('-',' ',$name); 
        $query = Pages::orderBy('id','DESC');
        $query->where('name','=',$name);
        $pages = $query->first();
       
        
    return view('shawosy::frontend.pages', compact('pages', 'categories', 'subcategories'));
}
    
 


}

