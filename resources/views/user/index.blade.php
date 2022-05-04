@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('/provider/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/ladda/ladda-themeless.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/sweetalert2/dist/sweetalert2.min.css')}}">
@endsection

@section('javascript')
    <script src="{{asset('/provider/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/provider/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{asset('/js/ladda/spin.min.js')}}"></script>
    <script src="{{asset('/js/ladda/ladda.min.js')}}"></script>
    <script src="{{asset('/js/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('/js/notify/snotify.js')}}"></script>


    <script src="{{asset('/js/modules/users/main/users.js')}}"></script>
    <script src="{{asset('/js/modules/users/main/event_users.js')}}"></script>
    <script src="{{asset('/js/modules/users/data_table/users_data_table.js')}}"></script>

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="panel panel-flat">
                        <div class="panel-body">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-10">
                                        <section class="content-header">
                                            <h1>
                                                <i class="fa fa-user"></i> Users
                                            </h1>
                                        </section>
                                    </div>

                                    <div class="col-md-2">
                                        <a href="users/create/" class="btn btn-success form-control" data-style="expand-right">
                                            <span>Create New
                                                <i class="glyphicon glyphicon-plus-sign position-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="content">
                                <div class="panel-body">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="data-table-users">
                                        <thead>
                                        <tr>
                                            <th class="text-center" width="80%"> Name </th>
                                            <th class="text-center" width="80%"> Email </th>
                                            <th class="text-center" width="80%"> User Type </th>

                                            <th class="text-center">Edit/Delete/Reset Password</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="text-center">{{$user->first_name.' '.$user->last_name}}</td>
                                                <td class="text-center">{{$user->email}}</td>

                                                <td class="text-center">
                                                    {{isset($user->userGroup) ? $user->userGroup->user_group_name : ''}}

                                                </td>

                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="users/edit/{{$user->user_id}}" class="btn btn-primary btn-sm" class="addMore" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                                        <a href="#" data-id = "{{$user->user_id}}" class="btn btn-danger btn-sm user-delete" class="addMore" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                                                        <a href="users/resetpassword/{{$user->user_id}}" class="btn btn-warning btn-sm" class="addMore" title="Reset Password"><i class="glyphicon glyphicon-lock"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



