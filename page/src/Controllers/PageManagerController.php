<?php

namespace Shawosy\Page\Controllers;



use Shawosy\Page\Models\Pages;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PageManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagemanager = Pages::get();
        // $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('shawosy::pagemanager.index', compact('pagemanager'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        

            
            
      
    public function edit($id)
    {
        $data['error']='';
        $pagemanager = Pages::findOrFail($id);

        // $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('shawosy::pagemanager.edit', compact('data','pagemanager'));

    }

    



   
    
    

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
            //     'name'=>'required|min:2',
             // ]);
        $pagemanager = Pages::findOrFail($id);

        
       
        $pagemanager->name         =$request->input('name');
        $pagemanager->url         =$request->input('url');
        $pagemanager->title         =$request->input('title');      
        $pagemanager->detail         =$request->input('detail');

        $pagemanager->tags         =$request->input('tags');
        $pagemanager->meta_tag         =$request->input('meta_tag');
        $pagemanager->meta_description         =$request->input('meta_description');
        $pagemanager->keywords         =$request->input('keywords');
        $pagemanager->is_published         =$request->input('is_published');
        
       
        $upate = $pagemanager->save();


        if(isset($upate)) {
            return redirect()->back();
        }else{
            return redirect()->back()->with('errors', $validator->messages());
        }
    }

    

    
}
