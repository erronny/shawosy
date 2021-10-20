@extends('shawosy::ui.layouts.app')
@section('title', $post->title)
@section('keywords', $post->keywords)
@section('meta_tag', $post->meta_tag)
@section('meta_description')
{!! \Illuminate\Support\Str::limit($post->meta_description, 160) !!}
@endsection
@section('image')
{{asset ('shawosy/assets/post/' .$post->image )}}
@endsection

@section('author', '')


@section('content')
 
    <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax" style="background-image: url({{asset ('shawosy/assets/post/' .$post->image )}});">
      
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center">

            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-white">
              Our Blogroom
            </h1>

            <!-- Text -->
            <p class="lead mb-0 text-white-75">
              Keep up to date with what we're working on! Create Account for free .
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>

    <!-- SEARCH
    ================================================== -->
    <section class="mt-n6">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <!-- Form -->
            <form class="rounded shadow mb-4">
              <div class="input-group input-group-lg">

                <!-- Prepend -->
                <div class="input-group-prepend">
                  <span class="input-group-text border-0 pr-1">
                    <i class="fe fe-search"></i>
                  </span>
                </div>

                <!-- Input -->
                <input type="text" class="form-control border-0 px-1" aria-label="Search our blog..." placeholder="Search our blog...">

                <!-- Append -->
                <div class="input-group-append">
                  <span class="input-group-text border-0 py-0 pl-1 pr-3">
                    <a class="btn btn-sm btn-primary" href="{{URL ('/blog/search')}}">
                      Search
                    </a>
                  </span>
                </div>

              </div>
            </form>

            

          </div>
        </div> <!-- / .row -->
      </div>
    </section>


<section>

      <div class="container-fluid">

        <div class="row">
          


        

          <div class="col-12 col-lg-6 col-xl-8 offset-lg-3 offset-xl-2 py-7 py-lg-9 px-lg-7">
            <br><br>

            <!-- Heading -->
            <h1 class="mb-1 display-4 text-center">{{ $post->title }}</h1><br><br>
            <div class="col ml-n5">

               <div class="row align-items-center py-5 border-top border-bottom">
              <div class="col-auto">

                <!-- Avatar -->
                <div class="avatar avatar-lg">
                  <img src="{{asset ('images/logo.png')}}" alt="..." class="avatar-img rounded-circle">
                </div>

              </div>
              <div class="col ml-n5">

                <!-- Name -->
                <h6 class="text-uppercase mb-0">
                  Admin
                </h6>

                <!-- Date -->
                <time class="font-size-sm text-muted" datetime="2019-05-20">
                  Published on {{ $post->updated_at }}
                </time>

              </div>
              <div class="col-auto">

                <!-- Share -->
                <span class="h6 text-uppercase text-muted d-none d-md-inline mr-4">
                  Share:
                </span>

                <!-- Icons -->
                <ul class="d-inline list-unstyled list-inline list-social">
                  <li class="list-inline-item list-social-item mr-3">
                    <a href="https://www.instagram.com" class="text-decoration-none" target="_blank">
                      <img src="{{asset ('shawosy/assets/ui/img/icons/social/instagram.svg')}}" class="list-social-icon" alt="...">
                    </a>
                  </li>
                  <li class="list-inline-item list-social-item mr-3">
                    <a href="#!" class="text-decoration-none">
                      <img src="{{asset ('shawosy/assets/ui/img/icons/social/facebook.svg')}}" class="list-social-icon" alt="...">
                    </a>
                  </li>
                  <li class="list-inline-item list-social-item mr-3">
                    <a href="#!" class="text-decoration-none">
                      <img src="{{asset ('shawosy/assets/ui/img/icons/social/twitter.svg')}}" class="list-social-icon" alt="...">
                    </a>
                  </li>
                </ul>

              </div>
            </div>
            <br><br>
            <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-11 col-xl-11">

            <figure class="figure mb-7">

              <!-- Image -->
              <img class="figure-img img-fluid rounded lift lift-lg" src="{{asset ('shawosy/assets/post/' .$post->image )}}" alt="...">

              <!-- Caption -->
             <!--  <figcaption class="figure-caption text-center">
                This is a caption on this photo for reference
              </figcaption> -->

            </figure>
            <p class="lead mb-7 text-center text-muted">
              {!! $post->body !!}
            </p>
          </div>
          <p><strong>Tags: </strong><small>{{ $post->tags }}</small></p>
        </div>
        <br><br>

        <div class="row align-items-center py-5 border-top border-bottom">
              <div class="col-auto">

                <!-- Avatar -->
                <div class="avatar avatar-lg">
                  <img src="{{asset ('images/logo.png')}}" alt="..." class="avatar-img rounded-circle">
                </div>

              </div>
              <div class="col ml-n5">

                <!-- Name -->
                <h6 class="text-uppercase mb-0">
                  Admin
                </h6>

                <!-- Date -->
                <time class="font-size-sm text-muted" datetime="2019-05-20">
                  Published on {{ $post->updated_at }}
                </time>

              </div>
              <div class="col-auto">

                <!-- Share -->
                <span class="h6 text-uppercase text-muted d-none d-md-inline mr-4">
                  Share:
                </span>

                <!-- Icons -->
                <ul class="d-inline list-unstyled list-inline list-social">
                  <li class="list-inline-item list-social-item mr-3">
                    <a href="https://www.instagram.com" class="text-decoration-none" target="_blank">
                      <img src="{{asset ('shawosy/assets/ui/img/icons/social/instagram.svg')}}" class="list-social-icon" alt="...">
                    </a>
                  </li>
                  <li class="list-inline-item list-social-item mr-3">
                    <a href="#!" class="text-decoration-none">
                      <img src="{{asset ('shawosy/assets/ui/img/icons/social/facebook.svg')}}" class="list-social-icon" alt="...">
                    </a>
                  </li>
                  <li class="list-inline-item list-social-item mr-3">
                    <a href="#!" class="text-decoration-none">
                      <img src="{{asset ('shawosy/assets/ui/img/icons/social/twitter.svg')}}" class="list-social-icon" alt="...">
                    </a>
                  </li>
                </ul>

              </div>
            </div>

            
            

            
          </div>







          
        </div> <!-- / .row -->
      </div>
    </section>
    <!-- CTA
    ================================================== -->
    <section class="pt-6 pt-md-8 bg-gray-200">
      <div class="container pb-6 pb-md-8 border-bottom border-gray-300">
        <div class="row align-items-center">
          <div class="col-12 col-md">

            <!-- Heading -->
            <h3 class="mb-1 font-weight-bold">
              Get our stories delivered
            </h3>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-0">
              From us to your inbox weekly.
            </p>

          </div>
          <div class="col-12 col-md-5">

            <!-- Form -->
            <form>
              <div class="row">
                <div class="col">

                  <!-- Input -->
                  <input type="email" class="form-control" placeholder="Enter your email">

                </div>
                <div class="col-auto ml-n5">

                  <!-- Button -->
                  <button class="btn btn-primary" type="submit">
                    Subscribe
                  </button>

                </div>
              </div> <!-- / .row -->
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

      
 

@include('shawosy::ui.includes.uifooter')
@endsection
