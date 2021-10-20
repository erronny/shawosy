@extends('shawosy::layouts.app')

@section('content')
<style>
    .panel-body{
        background-color:;
        color:#264B68;
    }
    
</style><br/>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2>
                            {{ __('shawosy.Subcategories') }}

                           
                        </h2>
                    </div>
                     <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            
           <a href="{{ url('admin/dashboard') }}" class="btn btn-primary-soft mr-1"><span class="fa fa-chevron-circle-left author-log-ic"></span>&nbsp; {{ __('shawosy.Dashboard') }}</a>

           

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            
           
            <a href="{{ url('admin/subcategories/create') }}" class="btn btn-primary pull-right"><span class="fa fa-plus-square author-log-ic"></span>&nbsp;{{ __('shawosy.Create') }} {{ __('shawosy.New') }}</a>

          </div>
        </div> <br /><br />

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><span><h3>{{ __('shawosy.Name') }}</h3></span></th>
                                    
                                    <th><span><h3>{{ __('shawosy.Action') }}</h3></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($subcategories as $subcategory)
                                    <tr>
                                        <td><span style="font-size:18px;">{{ $subcategory->name }}</span></td>
                                        
                                        <td>
                                            <a href="{{ url("/admin/subcategories/{$subcategory->id}/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;{{ __('shawosy.Edit') }}</a>
                                            <a href="{{ url("/admin/subcategories/{$subcategory->id}/delete") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;{{ __('shawosy.Delete') }}</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">{{ __('shawosy.No subcategory available') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $subcategories->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
