@extends('shawosy::layouts.master2')



@section('content')
<section class="pt-8 pt-md-11">
<div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="{{URL ('/admin/dashboard')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
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
            
            <a href="{{URL ('/admin/pages')}}" class="btn btn-primary">
              {{ __('shawosy.Create') }} {{ __('shawosy.Page') }}
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
            
            <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-middle">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        {{ __('shawosy.Page') }}
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        {{ __('shawosy.Action') }}
                      </span>
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                @forelse ($pagemanager as $page)
                  <tr>
                    <td>
                      
                      <a href="{{ url("admin/page_content_manager/".$page->id."/edit") }}" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          {{ $page->name }}
                        </p>
                        <p class="font-size-sm text-muted mb-0">
                          {{ $page->title }}
                        </p>
                      </a>

                    </td>
                    <td>
                      
                      <a href="{{ url("admin/page_content_manager/".$page->id."/edit") }}" class="text-reset text-decoration-none">
                        <p class="font-size-sm mb-0">
                          <a href="{{ url("admin/page_content_manager/".$page->id."/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;{{ __('shawosy.Edit') }}</a>
                        </p>
                      </a>

                    </td>
                    
                  </tr>
                @empty
                                    <tr>
                                        <td colspan="5">{{ __('shawosy.No page available') }}</td>
                                    </tr>
                @endforelse
                  
                </tbody>
              </table>
            </div>

          </div>
        </div> 
    </div>
</div>

@endsection