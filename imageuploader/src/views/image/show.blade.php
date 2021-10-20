@extends('shawosy::layouts.app')

@section('content')
    <br><br>
   <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            
            <a href="{{route('imageuploader.index')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> {{ __('shawosy.Back') }}
            </a>

           

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            <a href="{{ route('imageuploader.index') }}" class="btn btn-primary-soft mr-1">
              {{ __('shawosy.Cancel') }}
            </a>
           

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
                                            
        

        

                     <input type="text" hidden value="{{$image->name}}" id="copyImageName">
                     <input type="text" hidden value="{{URL('shawosy/assets/storage/Uploaded/Images/'.$image->name)}}" id="copyImageUrl">                               </div><br><br>

                                            
                        <div class="col-sm-12">
                     <div class="card text-center">
  <div class="card-header">
    <a type="button" onclick="myFunction()"> {{$image->name}}</a>
     <a  class="btn  btn-primary-soft
                   " onclick="myUrlFunction()">{{ __('shawosy.Copy Full Url') }}</a>
  </div>
  <div class="">
    <a href="{{URL('shawosy/assets/storage/Uploaded/Images/'.$image->name)}}">
    <img class="card-img-top" src="{{asset('shawosy/assets/storage/Uploaded/Images/'.$image->name)}}" alt="Card image cap"></a>
  </div>
  <div class="card-footer text-muted">
    <b>{{ __('shawosy.Width') }}:</b>{{$image->width}}&nbsp;&nbsp; <b>{{ __('shawosy.Height') }}:</b>{{$image->height}}&nbsp;&nbsp; <b>{{ __('shawosy.Dimensions') }}:</b>{{$image->dimensions}}&nbsp;&nbsp;<b>{{ __('shawosy.Types') }}:</b>{{$image->types}}&nbsp;&nbsp; <b>{{ __('shawosy.Size') }}:</b>{{$image->size}}
  </div>

</div>
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

.card{
  border: 1px solid #dddddd;
}
.card-header{
  background-color: #EAF2EE;

}
.card-footer{
  background-color: #EAF2EE;

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

 <script type="text/javascript">
    function myUrlFunction() {
  /* Get the text field */
  var copyText = document.getElementById("copyImageUrl");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert(" Image Url Copied : " + copyText.value);
}
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("copyImageName");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert(" Image Copied : " + copyText.value);
}
   </script>
@endsection
