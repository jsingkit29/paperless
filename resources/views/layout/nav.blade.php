<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">

        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
             <img src="{{$templatePlugin->rootLocation()}}/css/images/ched_logo.png" width="45px" height="45px"/>
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <img src="{{$templatePlugin->rootLocation()}}/css/images/ched_logo.png" width="45px" height="45px"/>
            <b>CCLSP</b>
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-gears"></i>
                        {{--<img src="{{"" != auth()->user()->avatar ? $fileManager->getFileUrl("avatars/users", auth()->user()->avatar,auth()->user()->id) :
                                    $templatePlugin->rootLocation()."/css/images/image_placeholder.png"}}" class="user-image" alt="User Image">--}}
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="https://chedro3.ched.gov.ph" class="btn btn-link">
                                CHEDRO-III Website
                                <div class="pull-right">
                                    <span class="fa fa-home"></span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="/admin" class="btn btn-link">
                                Employee Portal
                                <div class="pull-right">
                                    <span class="fa fa-user"></span>
                                </div>
                            </a>
                        </li>

                        {{-- <li>
                            <a href="/updatePassword" class="btn btn-link">Change Password
                                <div class="pull-right">
                                    <span class="fa fa-lock"></span>
                                </div>
                            </a>
                        </li> --}}

                        <li role="seperator" class="divider"></li>

                        <li>
                            <a href="/logout" class="btn btn-link">Sign out
                                <div class="pull-right">
                                    <span class="fa fa-sign-out"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>