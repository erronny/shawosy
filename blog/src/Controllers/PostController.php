<?php

namespace Shawosy\Blog\Controllers;

use Shawosy\Blog\Models\Tag;
use Shawosy\Blog\Models\Post;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\General;
use Auth;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    function __construct()
    {
         // $this->middleware('permission:blog-list');
         // $this->middleware('permission:blog-show', ['only' => ['show']]);
         // $this->middleware('permission:blog-create', ['only' => ['create','store']]);
         // $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
         // $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['user'])->paginate(10);
        // $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('shawosy::posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $settings = General::orderBy('id','desc')->limit('1')->get();
        
        

        return view('shawosy::posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        

            
            
      




    public function store(Request $request)
            {
                  $this->validate($request, [
                      // 'name'=>'required|min:2',
                      // 'fname'=>'required|min:2',
                      // 'enrollment'=>'required',
                      // 'mobile'=>'required|min:10',
                      // 'email'=>'required|unique:tbl_student',
                      // 'yearOfEnrollment'=>'required',
                      // 'postName'=>'required',
                      
                  ]);
            
                  $data = $request->all();
                

           
                $path = 'shawosy/assets/post/';        
                $destinationPath    = $path;
                $image_file         =$request->file('images');
                $image = '';
                if($image_file){
                $file_size = $image_file->getSize();
                    
                    $image_name         = $image_file->getClientOriginalName();
                    $extention          = $image_file->getClientOriginalExtension();
                    $image = value(function() use ($image_file){
                    $filename = time().'.'. $image_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $image_file->move($destinationPath, $image);

                  
                
                }
            
       
                  $post = Post::create([          
                    'title'            => $data['title'],
                    'body'       => $data['body'],
                    'meta_tag'       => $data['meta_tag'],
                    'meta_description'       => $data['meta_description'],
                    'slug'       => $data['slug'],
                    'keywords'       => $data['keywords'],
                    'image'        => $image,
                    
                    'tags'    => $data['tags'],
                    'user_id'            =>'1',
                    'is_published'            =>'1' 
                    
                           
                   ]);
                 if(isset($post)) {
                  return redirect()->route('posts.index')->with('message','Student successfully added.');
                  }else{
                      return redirect()->back();
                  }
            }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
        $post = $post->load(['user'])->find($id);;
        // $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('shawosy::posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if($post->user_id != auth()->user()->id && auth()->user()->is_admin == false) {
            
        //     return redirect('/admin/posts');
        // }

        $post = Post::findOrFail($id);
        
        // $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('shawosy::posts.edit', compact('post'));
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
        // $this->validate($request, [
        //     'email'=>'required|unique:tbl_student,email,'.$id,
        //     'name'=>'required|min:2',
        //       'fname'=>'required|min:2',
        //       'enrollment'=>'required',
        //       'mobile'=>'required|min:10',
        //       'yearOfEnrollment'=>'required',
        //       'postName'=>'required',
        //     ]);
        $post = Post::findOrFail($id);

        $path = 'shawosy/assets/post/';        
                $destinationPath    = $path;
                $image_file         =$request->file('images');
                $image = '';
                if($image_file){
                $file_size = $image_file->getSize();
                    
                    $image_name         = $image_file->getClientOriginalName();
                    $extention          = $image_file->getClientOriginalExtension();
                    $image = value(function() use ($image_file){
                    $filename = time().'.'. $image_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $image_file->move($destinationPath, $image);

        $post->image            = $image;
        }
        $post->title            = $request->input('title');
        $post->body            = $request->input('body');
        $post->meta_tag            = $request->input('meta_tag');
        $post->meta_description            = $request->input('meta_description');
        $post->slug            = $request->input('slug');
        $post->keywords            = $request->input('keywords');
        
        $post->tags         =$request->input('tags');
        $post->user_id            ='1';
        $post->is_published            ='1';
        
       
        $upate = $post->save();


        if(isset($upate)) {
            return redirect()->route('posts.index')->with('message','Student successfully Updated.');
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
        $product   = Post::findOrFail($id);
        $delete     = $product->delete();
        if(isset($delete)) {
           return redirect()->route('posts.index');
        }else{
            return redirect()->back();
        }
    }


    public function updatePost($id, $keyword){
        if($keyword == 'unpublish'){
            $product = Post::findOrFail($id); 
            $updatedata = $product->fill(array('is_published'=>'0'))->save();
            return redirect()->back();   
        }
        if($keyword == 'publish'){
            $product = Post::findOrFail($id); 
            $updatedata = $product->fill(array('is_published'=>'1'))->save();
            return redirect()->back();
            
        }
    }
}
