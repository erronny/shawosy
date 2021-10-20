<?php
namespace Shawosy\Imageuploader\Controllers;

use Shawosy\Imageuploader\Models\Image;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class ImageUploaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Image = Image::get();
        

        return view('shawosy::image.index', compact('Image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('shawosy::image.create');
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
            $image = "";
            if($request->file('name')){
               

             
                $path = 'shawosy/assets/storage/Uploaded/Images/';        
                $destinationPath    = $path;
                $image_files         = $request->file('name');
                foreach($image_files as $k=>$image_file){
                    $file_size = $image_file->getSize();
                    $IsDefault = 0;

                    if($k ==0){
                        $IsDefault = 1;
                    }
                     
                $image_dimensions = getimagesize($image_file);
                $image_width = $image_dimensions[0];
                $image_height = $image_dimensions[1];
                $imageextentions          = $image_file->getMimeType();

                    $image_name         = $image_file->getClientOriginalName();
                    $extention          = $image_file->getClientOriginalExtension();
                    $image = value(function() use ($image_file,$k){
                    $filename = $k.time().'.'. $image_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $image_file->move($destinationPath, $image);

                    $Image =  Image::create([          
            'name'            => $image,
            'width'           => $image_width,
            'height'           => $image_height,
            'dimensions'           => ("$image_width x $image_height"),
            'types'            =>$imageextentions,
            'size'             =>("$file_size bytes"),
           
                     
           ]);
                }
                }else{
                return redirect()->route('document.index')
                ->with('error',
                 'Action Failed Please try again.');   
            }
    
          // $data = $request->all();
          


          

          //    $path = 'shawosy/assets/storage/Uploaded/Images/';        
          //       $destinationPath    = $path;
          //       $Images_files         = $request->file('name');
          //       $Images = '';
                
          //       if($Images_files){
          //         $imageNameArr = [];
          //       foreach($Images_files as $Images_file)
          //       {
          //       $file_size = $Images_file->getSize();

          //       $image_dimensions = getimagesize($Images_file);
          //       $image_width = $image_dimensions[0];
          //       $image_height = $image_dimensions[1];
                    
          //           $Images_name         = $Images_file->getClientOriginalName();
          //           $imageextentions          = $Images_file->getMimeType();
          //           $extention          = $Images_file->getClientOriginalExtension();
          //           $Images = value(function() use ($Images_file){
          //           $filename = time().'.'. $Images_file->getClientOriginalExtension();
          //           return strtolower($filename);
          //           });
          //           $Images_file->move($destinationPath, $Images);

          //           $Image =  Image::create([          
          //   'name'            => $Images,
          //   'width'           => $image_width,
          //   'height'           => $image_height,
          //   'dimensions'           => ("$image_width x $image_height"),
          //   'types'            =>$imageextentions,
          //   'size'             =>("$file_size bytes"),
           
                     
          //  ]);

          
                //   }
                // }
           

        
         if(isset($Image)) {
          return redirect()->route('imageuploader.index');
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
              // 'name' => 'image|mimes:jpeg,png,jpg,gif,svg|max:100000|dimensions:min_width=250,min_height=500,width=250,height=500',
          ], [  
                // 'name.required' => 'This field is required.',
        



        ]);
          $Image = Image::findOrFail($id);
          $data = $request->all();
         
          $path = 'shawosy/assets/storage/Uploaded/Images/';        
                $destinationPath    = $path;
                $Images_file         = $request->file('name');
                $Images = '';
                if($Images_file){
                $file_size = $Images_file->getSize();

                $image_dimensions = getimagesize($Images_file);
                $image_width = $image_dimensions[0];
                $image_height = $image_dimensions[1];
                    
                    $Images_name         = $Images_file->getClientOriginalName();
                    $imageextentions          = $Images_file->getMimeType();
                    $extention          = $Images_file->getClientOriginalExtension();
                    $Images = value(function() use ($Images_file){
                    $filename = time().'.'. $Images_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $Images_file->move($destinationPath, $Images);
                 }




         $Image->name           = $Images;
         
            $Image->width       = $image_width;
            $Image->height      = $image_height;
            $Image->dimensions  = ("$image_width x $image_height");
            $Image->types       =$imageextentions;
        
        
        $upate = $Image->save();


        if(isset($upate)) {
            return redirect()->route('imageuploader.index');
        }else{
            return redirect()->route('imageuploader.index');
        }
    }

     public function edit($id)
    {
        $Image = Image::findOrFail($id);
        
        
        return view('shawosy::image.update', compact('Image'));
    }
    public function show($id)
    {
      $image = Image::find($id);;
       return view('shawosy::image.show', compact('image'));
        
    }
    public function updateImage($id, $keyword){
        if($keyword == 'deactive'){
            $product = Image::findOrFail($id); 
            $updatedata = $product->fill(array('isActive'=>'0'))->save();
            return redirect('admin/imageuploader');   
        }
        if($keyword == 'active'){
            $product = Image::findOrFail($id); 
            $updatedata = $product->fill(array('isActive'=>'1'))->save();
            return redirect('admin/imageuploader');
            
        }
    }

    public function viewDetail($id)
    {   
        $query = Image::orderBy('id','DESC');
        $query->where('id',$id);
        $Image = $query->first();
       
        $page_title ="Detail";
        $page ="Detail";
        return view('Image.detail', compact('marks','Image','page_title','page'));
        
    }

    public function destroy($id)
    {
        $product   = Image::findOrFail($id);
        $delete     = $product->delete();
        if(isset($delete)) {
           return redirect()->route('imageuploader.index');
        }else{
            return redirect()->back();
        }
    }

    
   
}
