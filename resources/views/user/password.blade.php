@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{asset('/css/ladda/ladda-themeless.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/sweetalert2/dist/sweetalert2.min.css')}}">


@endsection

@section('javascript')



    <script src="{{asset('/js/jsvalidation/jquery.validate.js')}}"></script>

    <script src="{{asset('/js/ladda/spin.min.js')}}"></script>
    <script src="{{asset('/js/ladda/ladda.min.js')}}"></script>
    <script src="{{asset('/js/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('/js/notify/snotify.js')}}"></script>


    <script src="{{asset('/js/modules/users/main/users.js')}}"></script>
    <script src="{{asset('/js/modules/users/form/users_password_validation.js')}}"></script>
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
                                            <i class="fa fa-lock"></i> Change Password

                                        </h1>
                                    </section>
                                </div>


                            </div>

                        </div>

                        <form method="POST" id="form_user_password">
                            {{csrf_field()}}
                            <input type="hidden" id = "id" name = "id" value="{{session('id')}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row form-group">
                                        <div class="col-lg-4">
                                            <label for="first_name">Old Password</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-lg-4">
                                            <label for="first_name">New Password</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-lg-4">
                                            <label for="first_name">Confirm New Password</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" />
                                            </div>
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection