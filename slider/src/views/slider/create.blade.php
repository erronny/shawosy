@extends('shawosy::layouts.app')



@section('content')
<br><br>
@if(Request::segment(4)==='edit')
                            {{ Form::model($slider, array('route' => array('slider.update', $slider->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
                            <?php  
                              $url          = $slider->url;
                              $title          = $slider->title;
                              $description          = $slider->description;
                              
                              
                            ?>
                            @else
                            {{ Form::open(array('url' => 'admin/slider','enctype'=>'multipart/form-data','autocomplete'=>"off")) }}

                            <?php 
                                                                  
                                $url           =""; 
                                $title           ="";  
                                $description           ="";   
                              
                              
                              
                            
                            ?>
                            @endif
 <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            
            <a href="{{URL ('/admin/slider')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> {{ __('shawosy.Back') }}
            </a>

           

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            <a href="{{ url('admin/slider') }}" class="btn btn-primary-soft mr-1">
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
                                            <div class="col-sm-12">
                                            
                                            <label>{{ __('shawosy.Title') }}</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{{old('title')?old('title'):$title}}" placeholder="Enter title" /><br><br>
                                            <label>{{ __('shawosy.Description') }}</label>
                                              <input type="text" class="form-control" name="description"   placeholder="Small description" value="{{old('description')?old('description'):$description}}" />
                                            
                                          </div>
                                        </div><br><br>

                                            
                                            <div class="col-sm-12">
                                                    <table id="table3">
                                                              <trid="tr3">
                                                                <th id="th3"><b>{{ __('shawosy.Slider') }} {{ __('shawosy.Image') }}</b></th>
                                                                <th id="th3"><b>{{ __('shawosy.Upload') }}</b></th>
                                                                <!--<th id="th3"><b>Action</b></th>-->
                                                                
                                                              </tr>
                                                              <tr  id="tr3">
                                                                
                                                                <td id="td3"><input type="file" name="sliders_image" />@if($errors->has('sliders_image'))
                                                        <div class="text text-danger">{{ $errors->first('sliders_image') }}</div>
                                                      @endif</td>
                                                      <td><input type="url" class="form-control" name="url" id="url" value="{{old('url')?old('url'):$url}}" placeholder="landing page url.." />
                                                      <div class="text text-danger" id="urlErro"></div>
                                                     
                                                        @if($errors->has('url'))
                                                        <div class="text text-danger">{{ $errors->first('url') }}</div>
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




table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: #fff;
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

$('#mobileChange').keyup(function(){
    var flag = false;
   

    var mobile = ($(this).val());

    console.log('mobile',mobile);
    var pattern = /^[7-9][0-9]{9}$/;
    if(pattern.test(mobile)){
      console.log('valid mobile number');
      flag = true;
    }else{
      console.log('invallid  mobile number');
      flag = false;
    }
    
    var _token = "{{ csrf_token() }}";
    if(flag){
      $.ajax({
        type: "POST",
        url: "{{ URL('admin/checkMobile') }}",
        data:{
            _token:_token,
            mobile:mobile,
          },
        beforeSend(xhr){
            //alert('before');
        },
        success: function(result){
          flag = true;
          console.log(result);
          var obj = JSON.parse(result);
          console.log(obj);
          if(obj.status == "success"){
            console.log('success');
            //$('#myModal').modal('hide');
            //window.location.reload();
            $('#mobileErro').html(obj.message);
          }
          if(obj.status == "failed"){
            console.log('failed');
            $('#mobileErro').html(obj.message);
          }
             //console.log(result);
        },error: function(data){
                //alert("error");
        },complete: function(){
                //alert('complete');
        } 
      }); 
    }
   //return flag; 
});


function readURL(input) {
  if (input.sliders_image && input.sliders_image[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#sliders_imagePreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#sliders_image").change(function() {
  alert();
  readURL(this);
});










  </script>

@endsection