var bodyTag = $("body");

bodyTag.on("click", "#go-to-main-site", function(event){
    event.preventDefault();
    loadMainSite()
});


bodyTag.on("click", ".user-delete", function(event){
    var id = $(this).data("id");
    var formData = {};
    formData.id = id;
    sNotify("warning",
        "Delete User",
        "Are you sure you want to delete this user?",
        "Yes Delete It!",
        deleteUser,
        formData,
        true);
});

bodyTag.on("click", ".user-activate", function(event){
    var id = $(this).data("id");
    var formData = {};
    formData.id = id;
    sNotify("warning",
        "Activate User",
        "Are you sure you want to activate this user?",
        "Yes activate It!",
        activateUser,
        formData,
        true);
});