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
    <script src="{{asset('/js/modules/users/form/users_profile_validation.js')}}"></script>
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
                                            <i class="fa fa-bank"></i> Users
                                        </h1>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <form method="POST" id="form_user_profile" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" id = "user_id" name = "user_id" value="{{@ $user != null ? $user->user_id : ''}}">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="first_name">First Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="first_name"
                                                           name="first_name" placeholder="Name" value="{{@ $user != null ? $user->first_name : ''}}" />
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <label for="first_name">Middle Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="middle_name"
                                                           name="middle_name" placeholder="Name" value="{{@ $user != null ? $user->middle_name : ''}}" />
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <label for="first_name">Last Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="last_name"
                                                           name="last_name" placeholder="Name" value="{{@ $user != null ? $user->last_name : ''}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="first_name">Email</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="email"
                                                           name="email" placeholder="Name" value="{{@ $user != null ? $user->email : ''}}" />
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <label for="first_name">Username</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{@ $user != null ? $user->username : ''}}"/>
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


