<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Digital In-Corporation</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="notificationsbtn nav navbar-nav navbar-left">
                <li id="notificationsli">
                    <a id="notifications" href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-envelope"></i>
                  <span class="noty-manager-bubble" style="margin-left: -2px; top: 10px; opacity: 1;">{{ auth()->user()->unreadNotifications()->count() }}</span></a>

                    <div id="notification-container" class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="drop3">

                        <section class="panel">
                            <header class="panel-heading">
                                <strong>Notifications</strong>
                            </header>
                            <div id="notification-list" class="list-group list-group-alt">
                              
                              <div style=""><div class="noty-manager-list-item noty-manager-list-item-error">
                                @foreach(Auth::user()->unreadNotifications  as $not)
                                <div class="activity-item"> <i class="fa fa-bell text-success"></i> 
                                    <div class="activity"> <a href="{{ URL('admin/notifications')}}"> New User {{$not->data['data']}} Registered</a> <span>{{$not->created_at}}</span> </div> 
                                </div>
                                @endforeach
                            </div></div>
                              
                              </div>
                            <footer class="panel-footer">
                                <a href="{{ URL('admin/notifications')}}" class="pull-right"><i class="fa fa-cog"></i></a>
                                <a href="{{ URL('admin/notifications')}}" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                            </footer>
                        </section>

                    </div>
                </li>
            </ul>
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{!!URL('/')!!}/admin/websitesetting">Settings</a>
                        <a class="dropdown-item" href="{{URL('admin/profile')}}">Security</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted"></i>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                          </form>
                    </div>
                </li>
            </ul>
        </nav>