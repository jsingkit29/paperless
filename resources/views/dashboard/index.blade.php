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
        <div class="login-logo">
        <a href="/dashboard"><b class="text-danger">CHEDRO-III </b><b>APPOINTMENT SYSTEM</b></a>
        </div>
            <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="panel panel-flat">
                        <div class="panel-body">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-3">
                                        <section class="content-header">
                                            <h1>
                                                <i class="fa fa-calendar"></i> View Appointments
                                            </h1>
                                        </section>
                                    </div>
                                </div>

                            </div>

                            <div class="content">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




