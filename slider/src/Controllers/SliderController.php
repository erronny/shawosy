<?php
namespace Shawosy\Slider\Controllers;

use Shawosy\Slider\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::get();
        // $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('shawosy::slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $settings = General::orderBy('id','desc')->limit('1')->get();
        
        return view('shawosy::slider.create');
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
            // 'name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000|dimensions:min_width=250,min_height=500,width=250,height=500',
              
          ]);
    
          $data = $request->all();
          



             $path = 'shawosy/assets/storage/sliders/';        
                $destinationPath    = $path;
                $sliders_file         = $request->file('sliders_image');
                $sliders = '';
                if($sliders_file){
                $file_size = $sliders_file->getSize();
                    
                    $sliders_name         = $sliders_file->getClientOriginalName();
                    $extention          = $sliders_file->getClientOriginalExtension();
                    $sliders = value(function() use ($sliders_file){
                    $filename = time().'.'. $sliders_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $sliders_file->move($destinationPath, $sliders);

                  
                }
          

          $slider =  Slider::create([          
            'name'            => $sliders,
            'url'       => $data['url'],
            'title'       => $data['title'],
            'description'       => $data['description'],
            'isActive'       => '1',
                     
           ]);
         if(isset($slider)) {
          return redirect()->route('slider.index');
          }else{
              return redirect()->back()->with('errors', 'Youe image size will be');
          }
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
           $this->validate($request, [
              'name' => 'image|mimes:jpeg,png,jpg,gif,svg|max:100000|dimensions:min_width=250,min_height=500,width=250,height=500',
          ], [  
                'name.required' => 'This field is required.',
        



        ]);
          $slider = Slider::findOrFail($id);
          $data = $request->all();
         
          $path = 'shawosy/assets/storage/sliders/';        
                $destinationPath    = $path;
                $sliders_file         = $request->file('sliders_image');
                $sliders = '';
                if($sliders_file){
                $file_size = $sliders_file->getSize();
                    
                    $sliders_name         = $sliders_file->getClientOriginalName();
                    $extention          = $sliders_file->getClientOriginalExtension();
                    $sliders = value(function() use ($sliders_file){
                    $filename = time().'.'. $sliders_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $sliders_file->move($destinationPath, $sliders);
                    $slider->name            = $sliders;

                  
                }




        
        
        $slider->url            = $request->input('url');
        $slider->title            = $request->input('title');
        $slider->description            = $request->input('description');
        
        



       
        $upate = $slider->save();


        if(isset($upate)) {
            return redirect()->route('slider.index');
        }else{
            return redirect()->route('slider.index');
        }
    }

     public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        // $settings = General::orderBy('id','desc')->limit('1')->get();
        
        return view('shawosy::slider.update', compact('slider'));
    }
    public function show($id)
    {
        
    }
    public function updateSlider($id, $keyword){
        if($keyword == 'deactive'){
            $product = Slider::findOrFail($id); 
            $updatedata = $product->fill(array('isActive'=>'0'))->save();
            return redirect('admin/slider');   
        }
        if($keyword == 'active'){
            $product = Slider::findOrFail($id); 
            $updatedata = $product->fill(array('isActive'=>'1'))->save();
            return redirect('admin/slider');
            
        }
    }

    public function viewDetail($id)
    {   
        $query = Slider::orderBy('id','DESC');
        $query->where('id',$id);
        $slider = $query->first();
       
        $page_title ="Detail";
        $page ="Detail";
        return view('slider.detail', compact('marks','slider','page_title','page'));
        
    }

    public function destroy($id)
    {
        $product   = Slider::findOrFail($id);
        $delete     = $product->delete();
        if(isset($delete)) {
           return redirect('admin/slider');
        }else{
            return redirect()->back();
        }
    }

    
   
}
