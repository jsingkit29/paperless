@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{asset('/provider/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/ladda/ladda-themeless.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/sweetalert2/dist/sweetalert2.min.css')}}">
@endsection

@section('javascript')
    <script src="{{asset('/provider/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/provider/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jsvalidation/jquery.validate.js')}}"></script>

    <script src="{{asset('/js/ladda/spin.min.js')}}"></script>
    <script src="{{asset('/js/ladda/ladda.min.js')}}"></script>
    <script src="{{asset('/js/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('/js/notify/snotify.js')}}"></script>


    <script src="{{asset('/js/modules/users/main/users.js')}}"></script>
    <script src="{{asset('/js/modules/users/main/event_users.js')}}"></script>
    <script src="{{asset('/js/modules/users/form/users_validation.js')}}"></script>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-flat">
                    <div class="panel-body">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10">
                                    <section class="content-header">
                                        <h1>
                                            <i class="fa fa-user"></i> Add Users
                                        </h1>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <form method="POST" action="{{route('saved_users')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" id = "user_id" name = "user_id" value="{{@ $user != null ? $user->user_id : ''}}">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <label for="first_name">Higher Education Institution Name / Organization Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="heiname" name="heiname" placeholder="HEI Name / Organization Name" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                            <label for="service">User Group</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control select1" id="user_group_id" name="user_group_id" placeholder= "User Group" onChange="check(this);">
                                                        <option value="" disabled selected>
                                                        Select User Group
                                                        </option>
                                            
                                                        <option value="1">
                                                        Admin
                                                        </option>
                                                        
                                                        <option value="2">
                                                        Higher Education Institution
                                                        </option>
                                                        
                                                        <option value="3">
                                                        CHEDRO 3 Personnel
                                                        </option>
                                                        
                                                    </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="first_name">Username</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{@ $user != null ? $user->username : ''}}"/>
                                                </div>
                                            </div>

                                            @if(!isset($user))
                                            <div class="col-lg-4">
                                                <label for="first_name">Password</label>
                                                <div class="col-sm-12">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <label for="first_name">Confirm Password</label>
                                                <div class="col-sm-12">
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" />
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="first_name">Google Drive Link</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="gdrivelink" name="gdrivelink" placeholder="Google Drive Link" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-8 text-right">
                                                <button type="submit" class="btn btn-success btn-ladda-progress ladda-button" data-style="expand-right">Submit <span class="glyphicon glyphicon-ok"></span>
                                                </button>

                                                <a href="/dashboard" class="btn btn-warning">Back <span class="glyphicon glyphicon-arrow-left"></span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                         {{ session()->get('message') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--@include('users/modal')--}}
@endsection


