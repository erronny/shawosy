@extends('shawosy::layouts.master2')



@section('content')

<section class="pt-8 pt-md-11">
<div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="{{URL ('/admin/pages')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> {{ __('shawosy.Back') }}
            </a>

            

            
          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            
            <a href="{{URL ('/admin/dashboard')}}" class="btn btn-primary">
              {{ __('shawosy.Dashboard') }}
            </a>

          </div>
        </div> <!-- / .row -->
      </div><!-- / .container -->
</section>
<div class="row">
          <div class="col-12">
            
            <!-- Divider -->
            <hr class=" border-gray-300">

          </div>
        </div> <!-- / .row -->
<section class="pt-6 pt-md-8">
      <div class="container pb-8 pb-md-11 border-bottom border-gray-300">
<div class="row">
          <div class="col-12">
            <div class="row">
          <div class="col-12 col-md-7">
           
              
            
          </div>
          <div class="col-12 col-md-5">
            <div class="">
            
            <div class="collapse d-lg-block" id="sidenavCollapse">
              <div class="">

                

                

                
                <h6 class="text-uppercase font-weight-bold">
                  <label class="pull-right-pro">{{ __('shawosy.Update') }} {{ __('shawosy.Page') }}<span class="required">*</span></label>
                </h6>

                <div class="panel-body">
                        {{ Form::model($pages, array('route' => array('pages.update', $pages->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
                            <?php
                              $name           =$pages->name;
                              $url           =$pages->url;
                              
                              
                            ?>


                            @include('shawosy::pages._form')
                            <br>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-8">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-floppy-o author-log-ic"></span>&nbsp;{{ __('shawosy.Update') }}
                                    </button>
                                </div>
                            </div>

                        {{ Form::close() }}
                    </div>

                
              </div>
            </div>


          </div>
            
            

            

          </div>
        </div> <!-- / .row -->
            

          </div>
        </div> 
    </div>
</div>

@endsection