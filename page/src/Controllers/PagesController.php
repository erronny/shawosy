<?php

namespace Shawosy\Page\Controllers;



use Shawosy\Page\Models\Pages;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pages = Pages::get();
        // $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('shawosy::pages.index', compact('pages'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        

            
            
      
    public function edit($id)
    {
        
        $pages = Pages::findOrFail($id);

        // $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('shawosy::pages.edit', compact('pages'));

    }

    // public function create()
    // {
    //     $pages = Pages::get();


    //     // $settings = General::orderBy('id','desc')->limit('1')->get();
        
        

    //     return view('shawosy::pages.create', compact('pages'));
    // }



    public function store(Request $request)
            {
                $pages = Pages::get();
                  $this->validate($request, [
                       'name'=>'required|min:2'
                      
                      
                  ]);
            
                  $data = $request->all();
                

           
               
            
       
                  $pages = Pages::create([          
                    
                    'name'    => $data['name'],
                    'url'    => $data['url'],
                    'detail'    => 'NA',
                    'is_published'    => '0',
                    // 'user_id'    => '0'
                    
                    
                           
                   ]);
                 if(isset($pages)) {
                  return redirect()->route('pages.index')->with('message','Student successfully added.');
                  }else{
                      return redirect()->back()->with('errors', "$validator->messages()");
                  }
            }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(pages $pages)
    // {
    //     $pages = Pages::get();
    //     // $settings = General::orderBy('id','desc')->limit('1')->get();

    //     return view('shawosy::pages.show', compact('pages'));
    // }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
            //     'name'=>'required|min:2',
             // ]);
        $pages = Pages::findOrFail($id);

        
       
        $pages->name         =$request->input('name');
        
       
        $upate = $pages->save();


        if(isset($upate)) {
            return redirect()->route('pages.index');
        }else{
            return redirect()->back();
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
        $product   = Pages::findOrFail($id);
        $delete     = $product->delete();
        if(isset($delete)) {
           return redirect()->route('pages.index');
        }else{
            return redirect()->back();
        }
    }


    public function updatePage($id, $keyword){
        if($keyword == 'unpublish'){
            $product = Pages::findOrFail($id); 
            $updatedata = $product->fill(array('is_published'=>'0'))->save();
            return redirect('admin/pages')->with('message','Deactive Successfully.');   
        }
        if($keyword == 'publish'){
            $product = Pages::findOrFail($id); 
            $updatedata = $product->fill(array('is_published'=>'1'))->save();
            return redirect('admin/pages')->with('message','Active Successfully.');
            
        }
    }
}
