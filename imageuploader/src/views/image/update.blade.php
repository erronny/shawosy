@extends('shawosy::layouts.app')



@section('content')
<br><br>

                            {{ Form::model($Image, array('route' => array('imageuploader.update', $Image->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
                            <?php  
                              
                              $name          = $Image->name;
                              
                              
                              
                            ?>
                            
 <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            
            <a href="{{ route('imageuploader.index')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> {{ __('shawosy.Back') }}
            </a>

           

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            <a href="{{ route('imageuploader.index')}}" class="btn btn-primary-soft mr-1">
              {{ __('shawosy.Cancel') }}
            </a>
            <button type="submit" class="btn btn-primary">
              {{ __('shawosy.Update') }}
            </button>

          </div>
        </div> <!-- / .row -->
      </div><!-- / .container -->
<div class="basic-form-area mg-tb-15">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
                <div class="sparkline12-hd">
                    <div>
                      @if(Session::has('message'))
                      <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {!! Session::get('message') !!} </div>
                      @endif

                      @if(Session::has('error'))
                      <div class="alert alert-danger login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {!! Session::get('error') !!} </div>
                      @endif
                    </div>
                    
                </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
              
                <div class="sparkline12-graph">
                      
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    

                            
                                        <div class="form-group-inner">
                                            <br><br>
                                            
                                        </div><br><br>
<div class="col-sm-4">
                    <div class="">
                    <i  id="thumb-output" style="width: 20rem; height: 18rem;"></i> 
                    </div>
                    </div>
                                            
          <div class="col-sm-12">
          <table id="table3">
           <trid="tr3">
           <th id="th3"><b>{{ __('shawosy.Image') }}</b></th>
          </tr>
          <tr  id="tr3">
          <td id="td3"><input type="file" name="name"  onchange="loadPreview(this)" accept="image/png, image/jpeg, image/gif, image/tiff, image/image/svg+xml, image/webp, image/apng, image/avif"/>@if($errors->has('name'))
          <div class="text text-danger">{{ $errors->first('name') }}</div>
          @endif</td>
                                                      
         </tr>
          </table>
          </div>
           </div>
                                        </div>
                                       <br><br><br>
                                        

                                        
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
 </form>

@endsection
@section('extrajs')
<style>

#table3 {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: #ffff;
}

#td3, #th3 {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

#tr3:nth-child(even) {
  background-color: #dddddd;
}

#thumb-output{
  width: 18px;
  height: 18px;
}


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: #fff;
}
img{
  width: 18rem;
  height: 18rem;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #fff;
}

.required {
  color: red;
}

.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
 <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css')}}">

 <script src="{{ asset('assets/css/form/jquery-1.12.4.min.js')}}"></script>

  <script type="text/javascript">



function readURL(input) {
  if (input.name && input.name[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#namePreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#name").change(function() {
  alert();
  readURL(this);
});










  </script>
   <script src="{{ asset('assets/css/form/jquery-1.12.4.min.js')}}"></script>
<script type="text/javascript">
   function loadPreview(input){
       var data = $(input)[0].files; //this file data
       $.each(data, function(index, file){
           if(/(\.|\/)(gif|jpe?g|png|tiff|svg)$/i.test(file.type)){
               var fRead = new FileReader();
               fRead.onload = (function(file){
                   return function(e) {
                       var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image thumb element
                       $('#thumb-output').append(img);
                   };
               })(file);
               fRead.readAsDataURL(file);
           }
       });
   }
</script>

@endsection