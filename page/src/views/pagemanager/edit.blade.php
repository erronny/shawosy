@extends('shawosy::layouts.master2')



@section('content')


   
   
    <section class="pt-8 pt-md-11">
      {{ Form::model($pagemanager, array('route' => array('page_content_manager.update', $pagemanager->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
                            <?php
                              
                              
                              $detail           =$pagemanager->detail;
                              $name           =$pagemanager->name;
                              $title           =$pagemanager->title;
                              $url           =$pagemanager->url;
                              $tags           =$pagemanager->tags;
                              $meta_tag           =$pagemanager->meta_tag;
                              $meta_description           =$pagemanager->meta_description;
                              $keywords           =$pagemanager->keywords;
                              

                              
                              
                            ?>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="{{URL ('/admin/page_content_manager')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
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
            <a href="{{URL ('/admin/page_content_manager')}}" class="btn btn-primary-soft mr-1">
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
           
              @include('shawosy::pagemanager._form')
            
          </div>
          <div class="col-12 col-md-3">
            <div class="">
            
            <div class="collapse d-lg-block" id="sidenavCollapse">
              <div class="">
                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Name') }}
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" name="name" id="name" value="{{old('name')?old('name'):$name}}" />
              <div class="text text-danger" id="nameErro"></div>
              
                  </li>
                  
                </ul>

                <!-- Heading -->
                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Title') }}
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" name="title" id="title" value="{{old('title')?old('title'):$title}}" />
              <div class="text text-danger" id="titleErro"></div>
              
                  </li>
                  
                </ul>

                <!-- Heading -->
                <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Permalink') }}
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" name="url" id="url" value="{{old('url')?old('url'):$url}}" />
              <div class="text text-danger" id="urlErro"></div>
              
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
                 <h6 class="text-uppercase font-weight-bold">
                  {{ __('shawosy.Publish') }}
                </h6>
                <ul class="list mb-1">
                  <li class="">
                    <input type="checkbox" class="form-control" name="is_published"   value="1" placeholder="" />
                 
                  </li>
                </ul>


                
              </div>
            </div>


          </div>
            
            

            

          </div>
        </div> <!-- / .row -->
        {{ Form::close() }}
     
    </section>

    

   
@endsection