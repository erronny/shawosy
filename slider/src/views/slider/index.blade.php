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
            <a class="btn btn-primary" href="{{ URL("admin/slider/create")}}">{{ __('shawosy.Create') }} {{ __('shawosy.Slider') }}</a>

          </div>
        </div> <!-- / .row -->
      </div><!-- / .container -->
      <br/>
 <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="col-sm-4 text text-right">
                                     
                                  
                                 
                                </div>
                
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>{{ __('shawosy.Slider') }} {{ __('shawosy.Image') }}</b></th>
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>{{ __('shawosy.URL') }}</b></th>
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>{{ __('shawosy.Title') }}</b></th>
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>{{ __('shawosy.Description') }}</b></th>
                                    
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>{{ __('shawosy.Action') }}</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($slider as $slider)
                                    <tr class="table-info">
                                        <td>{{ $slider->name }}</td>
                                        
                                        
                                        <td>{{ $slider->url }}</td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->description }}</td>
                                        
                                        
                                        <td>
                                           
                                                @if($slider->isActive == '1') 
                                                        <a href="{{ url('admin/updateSlider/'.$slider->id.'/deactive') }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ __('shawosy.Disable') }}</a>
                                                   
                                                @endif
                                               @if($slider->isActive == '0') 
                                                        <a href="{{ url('admin/updateSlider/'.$slider->id.'/active') }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ __('shawosy.Enable') }}</a>
                                                   
                                                @endif
                                            
                                            
                                            <a href="{{ url("admin/slider/".$slider->id."/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;{{ __('shawosy.Edit') }}</a>
                                            <a href="{{ url("/admin/slider/{$slider->id}/delete") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;{{ __('shawosy.Delete') }}</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">{{ __('shawosy.No slider available') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        

                   
            </div>

        </div>
    </div>

@endsection