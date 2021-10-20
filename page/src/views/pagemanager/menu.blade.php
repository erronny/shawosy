<div class="notice">
	<table class="table">
                            <thead>
                                <tr>
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>{{ __('shawosy.Page') }} </b></th>
                                    
                                    
                                    
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>{{ __('shawosy.Action') }}</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pages as $page)
                                    <tr class="table-info">
                                        <td><h3>{{ $page->name }}</h3></td>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <td>
                                           
                                                @php
                                                    if($page->isActive == '1') {
                                                        $label = 'Deactive';
                                                    } else {
                                                        $label = 'Active';
                                                    }
                                                @endphp
                                                <a href="{{ url('admin/updatepage/'.$page->id.'/active') }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ $label }}</a>
                                            
                                            
                                            <a href="{{ url("admin/pages/".$page->id."/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;{{ __('shawosy.Edit') }}</a>
                                            
                                            <a href="{{ url("/admin/page/{$page->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;{{ __('shawosy.Delete') }}</a>
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