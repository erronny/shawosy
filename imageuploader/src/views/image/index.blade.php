@extends('shawosy::layouts.app')



@section('content')
<br/>
 <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            
            

           

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            <a href="{{ url('admin/dashboard') }}" class="btn btn-primary-soft mr-1">
              {{ __('shawosy.Dashboard') }}
            </a>
            <a class="btn btn-primary" href="{{ route('imageuploader.create')}}">{{ __('shawosy.Add') }} {{ __('shawosy.Image') }}</a>

          </div>
        </div> <!-- / .row -->
      </div><!-- / .container -->
      <br/>
 
        <div class="container">
        <div class="row">
            
                @forelse ($Image as $images)
                <div class="col-lg-4 mb-2">
                    <div class="card" style="width: 18rem; ">
                <a href="{{URL('shawosy/assets/storage/Uploaded/Images/'.$images->name)}}">
                  <img class="card-img-top" style="height: 10rem;" src="{{asset('shawosy/assets/storage/Uploaded/Images/'.$images->name)}}" alt="{{$images->name}}">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">{{$images->name}}&nbsp;<a type="button" onclick="myFunction()"><b>Copy</b></a><a  class="btn btn-xs btn-primary-soft
                   " onclick="myUrlFunction()">{{ __('shawosy.Copy Image Url') }}</a></h5>

                     <input type="text" hidden value="{{$images->name}}" id="copyImageName">
                     <input type="text" hidden value="{{URL('shawosy/assets/storage/Uploaded/Images/'.$images->name)}}" id="copyImageUrl">


                    <p class="card-text"><b>{{ __('shawosy.Width') }}:</b> {{ $images->width }}</p>
                    <p class="card-text"><b>{{ __('shawosy.Height') }}:</b> {{ $images->height }}</p>
                    <p class="card-text"><b>{{ __('shawosy.Dimensions') }}:</b> {{ $images->dimensions }}</p>
                    <p class="card-text"><b>{{ __('shawosy.Types') }}:</b> {{ $images->types }}</p>
                    <p class="card-text"><b>{{ __('shawosy.Size') }}:</b> {{ $images->size }}</p>
                    


                    <a href="{{ url("/admin/imageuploader/{$images->id}") }}" class="btn btn-xs btn-success"><span class="fa fa-eye author-log-ic"></span>&nbsp;{{ __('shawosy.View') }}</a>
                                            
                   <a href="{{ url("admin/imageuploader/".$images->id."/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;{{ __('shawosy.Edit') }}</a>
                   <a href="{{ url("/admin/imageuploader/{$images->id}/delete") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;{{ __('shawosy.Delete') }}</a>
                   




                  </div>
                </div>

         </div>
                @empty
                
                <p>{{ __('shawosy.No images available') }}</p>
                
                @endforelse

                        

                  
            </div>

        </div>
   <style type="text/css">
       .card{
  border: 1px solid #dddddd;
}
.card-header{
  background-color: #EAF2EE;

}
.card-footer{
  background-color: #EAF2EE;

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