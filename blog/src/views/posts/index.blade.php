@extends('shawosy::layouts.master2')

@section('content')

<section class="pt-8 pt-md-11">
<div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="{{route ('home')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> {{ __('shawosy.Back') }}
            </a>

            

          </div>
          
          <div class="col-auto">
            
            <!-- Buttons -->
            
            <a href="{{URL ('/admin/posts/create')}}" class="btn btn-primary">
               {{ __('shawosy.Write') }} {{ __('shawosy.post') }}
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
          <div class="col-12 col-md-12">
           <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-right">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        {{ __('shawosy.Title') }}
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        {{ __('shawosy.Body') }}
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        {{ __('shawosy.Tags') }}
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        {{ __('shawosy.Published') }}
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
                    @forelse ($posts as $post)
                                    <tr>
                                        <td><span style="font-size:18px;">{{ $post->title }}</span></td>
                                        <td><span style="font-size:18px;">{!! \Illuminate\Support\Str::limit($post->body, 200) !!}</span></td>
                                        <td><span style="font-size:18px;">{{ $post->tags }}</span></td>
                                        
                                        
                                        
                                        <td><span style="font-size:18px;">{{ $post->published }}</span></td>
                                        <td>
                                            
                                                
                                               @if($post->is_published == '1') 
                                                        <a href="{{ url('admin/updatePost/'.$post->id.'/unpublish') }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ __('shawosy.Unpublish') }}</a>
                                                   
                                                @endif
                                               @if($post->is_published == '0') 
                                                        <a href="{{ url('admin/updatePost/'.$post->id.'/publish') }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ __('shawosy.Publish') }}</a>
                                                   
                                                @endif
                                           
                                            
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" class="btn btn-xs btn-success"><span class="fa fa-eye author-log-ic"></span>&nbsp;{{ __('shawosy.Show') }}</a>
                                            <a href="{{ url("/admin/posts/{$post->id}/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;{{ __('shawosy.Edit') }}</a>
                                            <a href="{{ url("/admin/posts/{$post->id}/delete") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;{{ __('shawosy.Delete') }}</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">{{ __('shawosy.No post available') }}</td>
                                    </tr>
                                @endforelse
                  
                </tbody>
              </table>
            </div>
              
            
          </div>
          
        </div> <!-- / .row -->
            

          </div>
        </div> 
    </div>
</div>
    
                        

                        

                   
@endsection
