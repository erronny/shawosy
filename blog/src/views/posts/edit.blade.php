@extends('shawosy::layouts.master2')

@section('content')

    <section class="pt-8 pt-md-11">
      {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT', 'class' => 'form-horizontal','enctype'=>'multipart/form-data', )) }}
                            <?php  
                              $title           = $post->title;
                              $body          = $post->body;
                              $meta_tag          = $post->meta_tag;
                              $meta_description          = $post->meta_description;
                              $slug          = $post->slug;
                              $keywords     = $post->keywords;
                              
                              $tags           = $post->tags;                              
                              
        ?>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="{{ url('admin/posts') }}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> {{ __('shawosy.Back') }}
            </a>

            <!-- Heading -->
            <!-- <h1 class="display-4 mb-2">
              
            </h1> -->

            <!-- Text -->
            <!-- <p class="font-size-lg text-gray-700 mb-5 mb-md-0">
              
            </p> -->

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            <a href="{{ url('admin/posts') }}" class="btn btn-primary-soft mr-1">
              {{ __('shawosy.Cancel') }}
            </a>
            <button type="submit" class="btn btn-primary">
              {{ __('shawosy.Update') }}
            </button>

          </div>
        </div> <!-- / .row -->
      </div><!-- / .container -->
        <div class="row">
          <div class="col-12">
            
            <!-- Divider -->
            <hr class=" border-gray-300">

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-9">
           
              @include('shawosy::posts._form')
            
          </div>
          <div class="col-12 col-md-3">
            <div class="">
            
            <div class="collapse d-lg-block" id="sidenavCollapse">
              <div class="">

                <!-- Heading -->
                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Title') }}
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="title"   value="{{old('title')?old('title'):$title}}" placeholder="" />
                 
                  
                  </li>
                  
                </ul>

                <!-- Heading -->
                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Permalink') }}
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="slug"   value="{{old('slug')?old('slug'):$slug}}" placeholder="Enter Slug" />
                  
                  </li>
                  
                </ul>

                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Image') }}
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                     <input type="file" name="images"   />
                    
                  </li>
                </ul>

                
                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Tag') }}
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="tags"   value="{{old('tags')?old('tags'):$tags}}" placeholder="" />
                 
                  </li>
                </ul>

                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Meta') }} {{ __('shawosy.Tag') }}
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="meta_tag"   value="{{old('meta_tag')?old('meta_tag'):$meta_tag}}" placeholder="" />
                 
                  </li>
                </ul>

                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Meta') }} {{ __('shawosy.Description') }}
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="meta_description"   value="{{old('meta_description')?old('meta_description'):$meta_description}}" placeholder="" />
                 
                  </li>
                </ul>

                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Focus') }} {{ __('shawosy.Keywords') }}
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="keywords"   value="{{old('keywords')?old('keywords'):$keywords}}" placeholder="" />
                 
                  </li>
                </ul>


                
              </div>
            </div>


          </div>
            
            

            

          </div>
        </div> <!-- / .row -->
        {{ Form::close() }}
     
    </section>

    
<script type="text/javascript">
function readURL(input) {
  if (input.images && input.images[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#imagePreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

@endsection
