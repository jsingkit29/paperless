var currentLocation = currentLocation || location.protocol + '//' + location.host;


var processLogIn = function(formData){
    $.ajax({
        type: 'POST',
        data: formData,
        url: currentLocation + '/processLogIn',
        'dataType': 'json',
        success: function(data){
            Ladda.stopAll();
            if(data.response === false){
                sNotify("error", "Log In", data.message);
            } else {
                redirectDashboard();
            }
        }
    });
};


var redirectDashboard = function(){
    window.location = currentLocation +  '/dashboard';
};


var loadMainSite = function(){
    window.location = currentLocation;
};

