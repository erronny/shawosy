<?php

namespace Shawosy\Category\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Shawosy\Category\Models\Category;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $settings = General::orderBy('id','desc')->limit('1')->get();
        $categories = Category::paginate(10);

        return view('shawosy::categories.index', compact('categories', $categories ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        // $settings = General::orderBy('id','desc')->limit('1')->get();
        return view('shawosy::categories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $wherevalueString = implode($request->get('wherevalue'));

        Category::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'url' => $request->url,
            'wherevalue' => $wherevalueString,
        ]);
        // flash()->overlay('Category created successfully');

        return redirect('/admin/categories');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // $settings = General::orderBy('id','desc')->limit('1')->get();
        return view('shawosy::categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required']);

        $wherevalueString = implode($request->input('wherevalue'));
        $category = Category::findOrFail($id);      
        $category->name            = $request->input('name');
        $category->icon            = $request->input('icon');
        $category->url            = $request->input('url');
        $category->wherevalue            = $wherevalueString;
        
       
       
        $upate = $category->save();


        if(isset($upate)) {
            return redirect()->route('categories.index')->with('message','category  successfully Updated.');
        }else{
            return redirect()->back()->with('message','Action Failed Please try again.');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product   = Category::findOrFail($id);
        $delete     = $product->delete();
        if(isset($delete)) {
           return redirect('/admin/categories');
        }else{
            return redirect()->back();
        }
    }
}


   
