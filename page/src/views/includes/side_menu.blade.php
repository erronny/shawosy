<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Services
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{URL('admin/service/1/edit')}}">Service 1 </a>
                                    <a class="nav-link" href="{{URL('admin/service2/1/edit')}}">Service 2</a>
                                    <a class="nav-link" href="{{URL('admin/service3/1/edit')}}">Service 3</a>
                                    <a class="nav-link" href="{{URL('admin/service4/1/edit')}}">Service 4</a>
                                    <a class="nav-link" href="{{URL('admin/service5/1/edit')}}">Service 5</a>
                                    <a class="nav-link" href="{{URL('admin/service6/1/edit')}}">Service 6</a>
                                    
                                    
                                </nav>
                            </div>
                            
                            <div class="sb-sidenav-menu-heading"><a class="nav-link" href="{{URL('admin/posts')}}">Posts</a></div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee" aria-expanded="false" aria-controls="collapseEmployee">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseEmployee" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{URL('admin/pages')}}">List</a>
                                    <a class="nav-link" href="{{URL('admin/page_content_manager')}}">Page Manager</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Account</div>
                            <div class="sb-sidenav-menu-heading"><a class="nav-link" href="{{URL('admin/websitesetting')}}">Website Settings</a>
                            <a class="nav-link" href="{{URL('admin/security')}}">Security</a>
                            <a class="nav-link" href="{{URL('admin/notifications')}}">Notifications</a>
                            <a class="nav-link" href="{{URL('admin/logged-in-devices')}}">Device History</a>
                            <a class="nav-link" href="{{URL('admin/users')}}">User Manager</a>
                        </div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                        Digital in-Corporation
                    </div>
                </nav>
            </div>


















 <!-- <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{URL('admin/dashboard')}}">
                    <span style="font-size: 35px;">Tender</span>
                    {{-- <img class="main-logo" src="{{ asset('assets/img/logo/logo.png')}}" alt="" /> --}}
                </a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                    
                       <li class="active">
                            <a title="Landing Page" href="{{URL('/')}}" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                         <li class="active">
                            <a title="Landing Page" href="{{URL('admin/contractor')}}" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Contractor</span></a>
                        </li>
                        <li class="active">
                            <a title="Landing Page" href="{{URL('admin/tenders')}}" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Tender</span></a>
                        </li>

                        @if(Auth::user()->role_id == 20)
                            <li class="active">
                                <a title="Landing Page" href="{{URL('admin/users/represntative')}}" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">User</span></a>
                            </li>
                        @endif
                    
                    </ul>
                </nav>
            </div>
        </nav>
    </div> -->