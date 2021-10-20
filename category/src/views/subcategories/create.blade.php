@extends('shawosy::layouts.app')

@section('content')
<style>
    .panel-body{
        background-color:#CFE5F6;
        color:#264B68;
    }
    
</style>
{!! Form::open(['url' => '/admin/subcategories', 'class' => 'form-horizontal', 'role' => 'form']) !!}
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2>
                            {{ __('shawosy.Create') }} {{ __('shawosy.Subcategories') }}

                            
                        </h2>
                    </div>
                    
                    
                     <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            
            <a href="{{URL ('/admin/subcategories')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> {{ __('shawosy.Back') }}
            </a>

           

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            <a href="{{ url('admin/subcategories') }}" class="btn btn-primary-soft mr-1"><span class="fa fa-chevron-circle-left author-log-ic"></span>&nbsp; {{ __('shawosy.Cancel') }}</a>
           
            <button type="submit" class="btn btn-primary">
              Save
            </button>

          </div>
        </div> 
      </div><br/><br/>

                    <div class="panel-body">
                        

                            @include('shawosy::subcategories._form')

                            

                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    {!! Form::close() !!}
@endsection
