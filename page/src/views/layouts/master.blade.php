<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
@include('includes.head')  


</head>


    <body class="sb-nav-fixed">
      <style type="text/css">





<!-- start notification css -->
.starter-template {
  padding: 40px 15px;
  text-align: center;
}

a {
  color: #428bca;
}

a:hover {
  color: #D65C4F;
  text-decoration: none;
}

#notification-list {
  width: 300px;
  max-height: 400px;
  overflow-y: scroll;
}

.dropdown-menu > .panel {
  border: none;
  margin-left:  5px 0;

}

.panel-heading {
  background-color: #f1f1f1;
  border-bottom: 1px solid #dedede;
}

.activity-item i {
  float: left;
  margin-top: 3px;
  font-size: 16px;
}

div.activity {
  margin-left: 28px;
}

div.activity-item {
  padding: 7px 12px;
}

#notification-list div.activity-item {
  border-top: 1px solid #f5f5f5;
}

#notification-list div.activity-item a {
  font-weight: 600;
}

div.activity span {
  display: block;
  color: #999;
  font-size: 11px;
  line-height: 16px;
}

#notifications i.fa {
  font-size: 17px;
}

.noty_type_error * {
  font-weight: normal !important;
}

.noty_type_error a {
  font-weight: bold !important;
}

.noty_bar.noty_type_error a, .noty_bar.noty_type_error i {
  color: #fff
}

.noty_bar.noty_type_information a {
  color: #fff;
  font-weight: bold;
}

.noty_type_error div.activity span
{
  color: #fff
}

.noty_type_information div.activity span
{
  color: #fefefe
}

.no-notification {
  padding: 10px 5px;
  text-align: center;
}








.noty-manager-wrapper {
  position: relative;
  display: inline-block !important;
}

.noty-manager-bubble
{
  position: absolute;
  top: -8px;
  background-color: #fb6b5b;
  color: #fff;
  padding: 2px 5px !important;
  font-size: 9px;
  line-height: 12px;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  cursor: pointer;
  height: 15px;
  font-weight: bold;

  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  box-shadow:1px 1px 1px rgba(0,0,0,.1);
  opacity: 0;
}

<!-- end notification css -->

  .dot {
    height: 15px;
    width: 15px;
    background-color: red;
    border-radius: 50%;
    display: inline-block;
  }

.sec{
    position: relative;
    right: -13px;
    top:-22px;
}

.counter.counter-lg {
    top: -24px !important;
}
</style> 
        
        @include('includes.header')
        <div id="layoutSidenav">

        @include('includes.side_menu')        
       <div id="layoutSidenav_content">
        <main>
          @yield('content')
        </main>
        
        @include('includes.footer')
    </div>
    </div>
        @yield('extrajs')
        


<script src="https://cdn.tiny.cloud/1/invalid-origin/tinymce/5.4.2-90/tinymce.min.js" referrerpolicy="origin">
<script type="text/javascript">
    const url='<?php echo URL('/'); ?>';
</script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>


<!-- start notification script -->
<script type="text/javascript">
  
$( document ).ready(function() {
 
    $('#notifications').click(function( event ) {
 
        console.log( "Thanks for visiting!" );
      
      $('#notificationsli').toggleClass('open');
 
    });
 
});

</script>
<!-- end notification script -->
  <script src="{{asset('assets/admin/all.min.js')}}" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/admin/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/admin/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/admin/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/admin/assets/demo/datatables-demo.js')}}"></script>
        <!-- <script src="{{ asset('assets/adminjs/app.js') }}"></script> -->
     @if(Auth::user()->role_id == Config::get('constants.VENDOR') || Auth::user()->role_id == Config::get('constants.REPRASNTATIVE'))
    
  
     @endif
    

    </body>

</html>