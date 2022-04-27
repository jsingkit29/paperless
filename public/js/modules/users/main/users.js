var currentLocation = currentLocation || location.protocol + '//' + location.host + '/';
var mainRoute = 'users';

var processUsers = function(formData){
    $.ajax({
        type: 'POST',
        data: formData,
        url: currentLocation + mainRoute + '/store',
        'dataType': 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            Ladda.stopAll();
            if(data.response === false){
                sNotify("error", "Users", data.message);
            }else if(data.response === true){
                sNotify("success", "Users", data.message,"Ok",function(){
                    if(location.pathname === '/profile'){
                        loadDashboard();
                    }else{
                        loadUsers();
                    }
                },[],true);
            }
        }
    });
};

var loadUsers = function(){
    window.location = currentLocation + 'users';
};

var loadDashboard = function(){
    window.location = currentLocation + 'dashboard';
};

var deleteUser = function(formData){
    $.ajax({
        type: 'POST',
        data: formData,
        url: currentLocation + mainRoute + '/delete',
        'dataType': 'json',
        success: function(data){
            Ladda.stopAll();
            if(data.response === false){
                sNotify("error", "User", data.message);
            }else if(data.response === true){
                sNotify("success", "User", data.message,"Ok",function(){
                    location.reload();
                },[],true);
            }
        }
    });
};

var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#avatar-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

var processUpdatePassword = function(formData){
    $.ajax({
        type: 'POST',
        data: formData,
        url: currentLocation  + '/processUpdatePassword',
        'dataType': 'json',
        success: function(data){
            Ladda.stopAll();
            if(data.response === false){
                sNotify("error", "User", data.message);
            }else if(data.response === true){
                sNotify("success", "User", data.message,"Ok",function(){
                    loadDashboard()
                },[],true);
            }
        }
    });
};

var processOtherUpdatePassword = function(formData){
    $.ajax({
        type: 'POST',
        data: formData,
        url: currentLocation  + mainRoute+ '/processResetPassword',
        'dataType': 'json',
        success: function(data){
            Ladda.stopAll();
            if(data.response === false){
                sNotify("error", "User", data.message);
            }else if(data.response === true){
                sNotify("success", "User", data.message,"Ok",function(){
                    loadUsers()
                },[],true);
            }
        }
    });
};




$(function (){
    Ladda.bind(".btn-ladda-progress", {
        callback: function(instance) {
            var progress = 0;
            var interval = setInterval(function() {
                progress = Math.min(progress + Math.random() * 0.1, 0.8);
                instance.setProgress(progress);
            }, 200);
        }
    });

    if($('.select2').is(':visible')){
        $('.select2').select2();
    }

    if($('#birth_date').is(':visible')){
        $('#birth_date').datepicker({
            autoclose: true,
        });
    }


    //for image upload
    $(document).on('change', ':file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);

        //for preview
        readURL(this);
    });

    $(document).ready( function() {
        $(':file').on('fileselect', function(event, numFiles, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if( input.length ) {
                input.val(log);
            } else {
                // if( log ) alert(log);
            }

        });
    });
    //for image upload
});
