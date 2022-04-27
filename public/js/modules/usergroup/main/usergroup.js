var currentLocation = currentLocation || location.protocol + '//' + location.host + '/';
var mainRoute = 'usergroup';

var processUsergroup = function(formData){
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
                sNotify("error", "User Group", data.message);
            }else if(data.response === true){
                sNotify("success", "User Group", data.message,"Ok",function(){
                    loadUsergroup();
                },[],true);
            }
        }
    });
};

var loadUsergroup = function(){
    window.location = currentLocation + mainRoute;
};

var deleteUsergroup = function(formData){
    $.ajax({
        type: 'POST',
        data: formData,
        url: currentLocation + mainRoute + '/delete',
        'dataType': 'json',
        success: function(data){
            Ladda.stopAll();
            if(data.response === false){
                sNotify("error", "User Group", data.message);
            }else if(data.response === true){
                sNotify("success", "User Group", data.message,"Ok",function(){
                    loadUsergroup();
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

    if($('.selectpicker').is(':visible')){
        $('.selectpicker').selectpicker();
    }
});