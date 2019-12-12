 <!-- Navigation Bar-->
<header id="topnav">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
    

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset ('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Marcia J. <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                Welcome !
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{asset ('assets/images/logo-dark.png') }}"" alt="" height="26">
                        <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="{{asset ('assets/images/logo-sm.png') }}"" alt="" height="28">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
    
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="#">
                            <i class="la la-dashboard"></i>Dashboards <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="dashboard-2.html">Dashboard 2</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('linh-vuc.danh-sach') }}">
                            <i class="la la-cube"></i>Lĩnh vực <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ route('linh-vuc.danh-sach') }}">Quản lý lĩnh vực</a>
                            </li>
                            <li>
                                <a href="#">Thêm Lĩnh vực</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">email <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="email-inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="email-read.html">Read Email</a>
                                    </li>
                                    <li>
                                        <a href="email-compose.html">Compose Email</a>
                                    </li>
                                    <li>
                                        <a href="email-templates.html">Email Templates</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('nguoi-choi.danh-sach') }}"> <i class="la la-clone"></i>Người chơi <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ route('nguoi-choi.danh-sach') }}">Danh sách người chơi</a>
                            </li>
                            <li>
                                <a href="{{ route('luot-choi.danh-sach') }}">Lượt chơi</a>
                            </li>
                            <li>
                                <a href="{{ route('chi-tiet-luot-choi.danh-sach') }}">Chi tiết lượt chơi</a>
                            </li>
                            <li>
                                <a href="{{ route('lich-su-mua-credit.danh-sach') }}">Lịch sử mua credit</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('cau-hoi.danh-sach') }}"> <i class="la la-briefcase"></i>Câu hỏi <div class="arrow-down"></div></a>
                     
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('goi-credit.danh-sach') }}">
                            <i class="#"></i>Gói credit <div class="arrow-down"></div></a>
                        
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('quan-tri-vien.danh-sach') }}"> <i class="la la-flask"></i>Quản trị viên<div class="arrow-down"></div></a>
                       
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('cau-hinh-app.danh-sach') }}"> <i class="la la-file-text-o"></i>Cấu hình<div class="arrow-down"></div></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{ route('cau-hinh-app.danh-sach') }}">Cấu hình App</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cau-hinh-diem-cau-hoi.danh-sach') }}">Cấu hình điểm câu hỏi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cau-hinh-tro-giup.danh-sach') }}">Cấu hình trợ giúp</a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header>
<!-- End Navigation Bar-->