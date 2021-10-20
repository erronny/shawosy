@extends('shawosy::ui.layouts.app')

@section('title', $pages->title)
@section('keywords', $pages->keywords)
@section('meta_tag', $pages->meta_tag)
@section('meta_description')
{!! \Illuminate\Support\Str::limit($pages->meta_description, 160) !!}
@endsection
@section('image')
{{asset ('shawosy/assets/post/' .$pages->image )}}
@endsection

@section('author', '')



@section('content')


<style>
* {
  box-sizing: border-box;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 100%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}





</style>
<br>





      <div class="col-sm-12 ">
        
      </hr>
      </div>
    


  
  <!--page content Section Satrt-->
  
        

<div class="row">
  <div class="leftcolumn">
    
    
      
      
      <p>{!! $pages->detail !!}</p>
    
    </div>
  

      </div>
    
      
  </section>
  
  <br><br><br><br>
  
@include('shawosy::frontend.includes.uifooter')
	
@endsection