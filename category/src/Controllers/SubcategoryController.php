<?php

namespace Shawosy\Category\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Shawosy\Category\Models\Subcategory;
use Shawosy\Category\Models\Category;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $settings = General::orderBy('id','desc')->limit('1')->get();
        $subcategories = Subcategory::paginate(10);

        return view('shawosy::subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Subcategory $subcategory)
    {
        $categories = Category::pluck('name', 'id')->all();
        // $settings = General::orderBy('id','desc')->limit('1')->get();



        return view('shawosy::subcategories.create', compact('categories', 'subcategory'));
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
        Subcategory::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'icon' => $request->icon,
            'url' => $request->url,
            'wherevalue' => $wherevalueString,

        ]);
        // flash()->overlay('Category created successfully');

        return redirect('/admin/subcategories');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        // $settings = General::orderBy('id','desc')->limit('1')->get();

        $categories = Category::pluck('name', 'id')->all();


        return view('shawosy::subcategories.edit', compact('subcategory','categories'));
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
        $subcategory = Subcategory::findOrFail($id);    

        $subcategory->name            = $request->input('name');
        $subcategory->category_id            = $request->input('category_id');
        $subcategory->icon            = $request->input('icon');
        $subcategory->url            = $request->input('url');
        $subcategory->wherevalue            = $wherevalueString;
        
       
       
        $upate = $subcategory->save();


        if(isset($upate)) {
            return redirect()->route('subcategories.index')->with('message','subcategory  successfully Updated.');
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
        $product   = Subcategory::findOrFail($id);
        $delete     = $product->delete();
        if(isset($delete)) {
           return redirect('/admin/subcategories');
        }else{
            return redirect()->back();
        }
    }

}
