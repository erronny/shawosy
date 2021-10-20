<div class="row">
            <div class="col-12 col-md-4 col-lg-3">
        
              <!-- Brand -->
            <img src="{{asset ('images/logo1.png')}}" alt="..." class="footer-brand img-fluid mb-2">

            <!-- Text -->
            <p class="text-gray-700 mb-2">
              One stop Solution.
            </p>

            <!-- Social -->
            <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
              <li class="list-inline-item list-social-item mr-3">
                <a href="{{URL ('/')}}" class="text-decoration-none">
                  <img src="{{asset ('shawosy/assets/ui/img/icons/social/instagram.svg')}}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-3">
                <a href="{{URL ('/')}}" class="text-decoration-none">
                  <img src="{{asset ('shawosy/assets/ui/img/icons/social/facebook.svg')}}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-3">
                <a href="{{URL ('/')}}" class="text-decoration-none">
                  <img src="{{asset ('shawosy/assets/ui/img/icons/social/twitter.svg')}}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item">
                <a href="{{URL ('/')}}" class="text-decoration-none">
                  <img src="{{asset ('shawosy/assets/ui/img/icons/social/pinterest.svg')}}" class="list-social-icon" alt="...">
                </a>
              </li>
            </ul>
          </div>

            <div class="col-6 col-md-4 col-lg-2">
        
              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Class 2
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                @foreach($categories as $menuItem)
                     @if( $menuItem->wherevalue == '2')
                <li class="mb-3">
                  <a href="{{URL ('/'.$menuItem->url)}}" class="text-reset">
                   {{ $menuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                @foreach($categories as $menuItem)
                     @if( $menuItem->wherevalue == '12')
                <li class="mb-3">
                  <a href="{{URL ('/'.$menuItem->url)}}" class="text-reset">
                   {{ $menuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach

                @foreach($subcategories as $submenuItem)
                @if( $submenuItem->wherevalue == '2')
                <li class="mb-3">
                  <a href="{{URL ('/'.$submenuItem->url)}}" class="text-reset">
                   {{ $submenuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                @foreach($subcategories as $submenuItem)
                @if( $submenuItem->wherevalue == '12')
                <li class="mb-3">
                  <a href="{{URL ('/'.$submenuItem->url)}}" class="text-reset">
                   {{ $submenuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach

                
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">
        
              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Class 3
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                @foreach($categories as $menuItem)
                     @if( $menuItem->wherevalue == '3')
                <li class="mb-3">
                  <a href="{{URL ('/'.$menuItem->url)}}" class="text-reset">
                   {{ $menuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                @foreach($categories as $menuItem)
                     @if( $menuItem->wherevalue == '13')
                <li class="mb-3">
                  <a href="{{URL ('/'.$menuItem->url)}}" class="text-reset">
                   {{ $menuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach

                @foreach($subcategories as $submenuItem)
                @if( $submenuItem->wherevalue == '3')
                <li class="mb-3">
                  <a href="{{URL ('/'.$submenuItem->url)}}" class="text-reset">
                   {{ $submenuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                @foreach($subcategories as $submenuItem)
                @if( $submenuItem->wherevalue == '13')
                <li class="mb-3">
                  <a href="{{URL ('/'.$submenuItem->url)}}" class="text-reset">
                   {{ $submenuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                
              </ul>

            </div>
            <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
        
              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Connect
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-0">

                @foreach($categories as $menuItem)
                     @if( $menuItem->wherevalue == '4')
                <li class="mb-3">
                  <a href="{{URL ('/'.$menuItem->url)}}" class="text-reset">
                   {{ $menuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                @foreach($categories as $menuItem)
                     @if( $menuItem->wherevalue == '14')
                <li class="mb-3">
                  <a href="{{URL ('/'.$menuItem->url)}}" class="text-reset">
                   {{ $menuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach

                @foreach($subcategories as $submenuItem)
                @if( $submenuItem->wherevalue == '4')
                <li class="mb-3">
                  <a href="{{URL ('/'.$submenuItem->url)}}" class="text-reset">
                   {{ $submenuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                @foreach($subcategories as $submenuItem)
                @if( $submenuItem->wherevalue == '14')
                <li class="mb-3">
                  <a href="{{URL ('/'.$submenuItem->url)}}" class="text-reset">
                   {{ $submenuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach

                
                
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">
        
              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                Legal
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-0">
                @foreach($categories as $menuItem)
                     @if( $menuItem->wherevalue == '5')
                <li class="mb-3">
                  <a href="{{URL ('/'.$menuItem->url)}}" class="text-reset">
                   {{ $menuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                @foreach($categories as $menuItem)
                     @if( $menuItem->wherevalue == '15')
                <li class="mb-3">
                  <a href="{{URL ('/'.$menuItem->url)}}" class="text-reset">
                   {{ $menuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach

                @foreach($subcategories as $submenuItem)
                @if( $submenuItem->wherevalue == '5')
                <li class="mb-3">
                  <a href="{{URL ('/'.$submenuItem->url)}}" class="text-reset">
                   {{ $submenuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
                @foreach($subcategories as $submenuItem)
                @if( $submenuItem->wherevalue == '15')
                <li class="mb-3">
                  <a href="{{URL ('/'.$submenuItem->url)}}" class="text-reset">
                   {{ $submenuItem->name }}
                  </a>
                </li>
                @endif
                @endforeach
              </ul>

            </div>
          </div> <!-- / .row -->