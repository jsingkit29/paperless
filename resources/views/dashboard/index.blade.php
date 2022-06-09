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
    <!-- <script src="{{asset('/js/modules/users/data_table/users_data_table.js')}}"></script> -->

    <script>
        var bodyTag = $("body");

        bodyTag.on("click", ".appointment-update", function(event){
            var id = $(this).data("id");
            var formData = {};
            formData.id = id;
            sNotify("warning",
                "Update Appointment",
                "Are you sure you want to update this appointment?",
                "Yes!",
                updateDocument,
                formData,
                true);
        });

        var updateDocument = function(formData){
            $.ajax({
                type: 'POST',
                data: formData,
                url: currentLocation + 'appointments' + '/update',
                'dataType': 'json',
                success: function(data){
                    Ladda.stopAll();
                    if(data.response === false){
                        sNotify("error", "Appointment", data.message);
                    }else if(data.response === true){
                        sNotify("success", "Appointment", data.message,"Ok",function(){
                            location.reload();
                        },[],true);
                    }
                }
            });
        };
        
        var bodyTag = $("body");
    
        bodyTag.on("click", ".appointment-delete", function(event){
            var id = $(this).data("id");
            var formData = {};
            formData.id = id;
            sNotify("warning",
                "Delete Appointment",
                "Are you sure you want to delete this appointment?",
                "Yes Delete It!",
                deleteDocument,
                formData,
                true);
        });

        var deleteDocument = function(formData){
            $.ajax({
                type: 'POST',
                data: formData,
                url: currentLocation + 'appointments' + '/delete',
                'dataType': 'json',
                success: function(data){
                    Ladda.stopAll();
                    if(data.response === false){
                        sNotify("error", "Appointment", data.message);
                    }else if(data.response === true){
                        sNotify("success", "Appointment", data.message,"Ok",function(){
                            location.reload();
                        },[],true);
                    }
                }
            });
        };
    </script>
@endsection



@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        @if(auth()->check() && auth()->user()->user_group_id == 1) 
        <div class="login-logo">
        <a href="/dashboard"><b class="text-danger">CHED CENTRAL LUZON RO3 </b><b>SUBMISSION PORTAL ADMIN</b></a>
        </div>
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
                                                <i class="fa fa-user"></i> View HEIs
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
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="data-table-documents">
                                        <thead class="thread-dark">
                                        <tr>
                                            <th class="text-center" width="25%"> HEI Name </th>
                                            <th class="text-center" width="20%"> User Name </th>
                                            <th class="text-center" width="80%"> Google Drive Link </th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="text-center">{{$user->heiname}}</td>
                                                <td class="text-center">{{$user->username}}</td>
                                                <td class="text-center">{{$user->gdrivelink}}</td>
                                                <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{$user->gdrivelink}}" class="btn btn-warning btn-sm" class="addMore" title="Proceed to Google Drive"><i class="glyphicon glyphicon-folder-open"></i></a>
                                                    </div>
                                                </td>
                                                
                                                <!-- <td class="text-center">
                                                    {{isset($user->userGroup) ? $user->userGroup->user_group_name : ''}}

                                                </td>

                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="users/edit/{{$user->user_id}}" class="btn btn-primary btn-sm" class="addMore" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                                        <a href="#" data-id = "{{$user->user_id}}" class="btn btn-danger btn-sm user-delete" class="addMore" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                                                        <a href="users/resetpassword/{{$user->user_id}}" class="btn btn-warning btn-sm" class="addMore" title="Reset Password"><i class="glyphicon glyphicon-lock"></i></a>
                                                    </div>
                                                </td> -->
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
        @endif

        @if(auth()->check() && auth()->user()->user_group_id == 2) 
        <div class="login-logo">
        <a href="/dashboard"><b class="text-danger">CHED CENTRAL LUZON RO3 </b><b>SUBMISSION PORTAL</b></a>
        </div>
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
                                                <i class="fa fa-user"></i> View/Upload via Google Drive
                                            </h1>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="panel-body">
                                <a href="{{$currentuser}}" class="btn btn-warning btn-lg" class="addMore" title="Proceed to Google Drive"><i class="glyphicon glyphicon-folder-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if(auth()->check() && auth()->user()->user_group_id == 3) 
        <div class="login-logo">
        <a href="/dashboard"><b class="text-danger">CHED CENTRAL LUZON RO3 </b><b>SUBMISSION PORTAL PAGE</b></a>
        </div>
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
                                                <i class="fa fa-user"></i> View HEIs
                                            </h1>
                                        </section>
                                    </div>
                                </div>

                            </div>

                            <div class="content">
                                <div class="panel-body">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="data-table-documents">
                                        <thead class="thread-dark">
                                        <tr>
                                            <th class="text-center" width="25%"> HEI Name </th>
                                            <th class="text-center" width="20%"> User Name </th>
                                            <th class="text-center" width="80%"> Google Drive Link </th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="text-center">{{$user->heiname}}</td>
                                                <td class="text-center">{{$user->username}}</td>
                                                <td class="text-center">{{$user->gdrivelink}}</td>
                                                <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{$user->gdrivelink}}" class="btn btn-warning btn-sm" class="addMore" title="Proceed to Google Drive"><i class="glyphicon glyphicon-folder-open"></i></a>
                                                    </div>
                                                </td>
                                                
                                                <!-- <td class="text-center">
                                                    {{isset($user->userGroup) ? $user->userGroup->user_group_name : ''}}

                                                </td>

                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="users/edit/{{$user->user_id}}" class="btn btn-primary btn-sm" class="addMore" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                                        <a href="#" data-id = "{{$user->user_id}}" class="btn btn-danger btn-sm user-delete" class="addMore" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                                                        <a href="users/resetpassword/{{$user->user_id}}" class="btn btn-warning btn-sm" class="addMore" title="Reset Password"><i class="glyphicon glyphicon-lock"></i></a>
                                                    </div>
                                                </td> -->
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
        @endif

    </section>
@endsection




