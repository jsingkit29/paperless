<aside class="main-sidebar">
    <section class="sidebar">
        <!-- <div class="user-panel">
            <div class="pull-left image">
                {{--<img src="{{session('user_avatar')}}" class="img-circle" alt="User Image">--}}
            </div>
            <div class="pull-left info">
                {{-- <p>{{auth()->user()->first_name." ".auth()->user()->last_name}}</p> --}}
            </div>
        </div> -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"><h4><b> MENU </b></h4></li>
            

            @if(auth()->check() && auth()->user()->user_group_id == 1)
            <li class="treeview {{strpos($_SERVER['REQUEST_URI'], '/users') !== false ? "active" : ""}}">
                <a href="#"><i class="fa fa-user"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    
                    <li class="{{$_SERVER['REQUEST_URI'] == '/users/create' ? "active" : ""}}">
                        <a href="/users/create"><i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                    </li>
                </ul>
            </li>


             <!-- <li class="treeview {{strpos($_SERVER['REQUEST_URI'], '/usergroup') !== false ? "active" : ""}}">
                <a href="#"><i class="fa fa-user"></i>
                    <span>User Group</span>
                    <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$_SERVER['REQUEST_URI'] == "/usergroup" ? "active" : ""}}">
                        <a href="/usergroup"><i class="glyphicon glyphicon-th-list"></i> View All</a>
                    </li>
                    <li class="{{$_SERVER['REQUEST_URI'] == "/usergroup" ? "active" : ""}}">
                        <a href="/usergroup/create"><i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                    </li>
                </ul>
            </li> -->
            @endif 

            
        </ul>
    </section>
</aside>