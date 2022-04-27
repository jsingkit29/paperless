var deleteDocument = function(formData){
    $.ajax({
        type: 'POST',
        data: formData,
        url: currentLocation + 'documents' + '/delete',
        'dataType': 'json',
        success: function(data){
            Ladda.stopAll();
            if(data.response === false){
                sNotify("error", "Document", data.message);
            }else if(data.response === true){
                sNotify("success", "Document", data.message,"Ok",function(){
                    location.reload();
                },[],true);
            }
        }
    });
};

var releaseDocument = function(formData){
    $.ajax({
        type: 'POST',
        data: formData,
        url: currentLocation + 'assignments' + '/release',
        'dataType': 'json',
        success: function(data){
            Ladda.stopAll();
            if(data.response === false){
                sNotify("error", "Document", data.message);
            }else if(data.response === true){
                sNotify("success", "Document", data.message,"what",function(){
                    location.reload();
                },[],true);
            }
        }
    });
};