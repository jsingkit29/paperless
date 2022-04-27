var bodyTag = $("body");

bodyTag.on("click", ".usergroup-delete", function(event){
    var id = $(this).data("id");
    var formData = {};
    formData.id = id;
    sNotify("warning",
        "Delete User Group",
        "Are you sure you want to delete this User Group?",
        "Yes Delete It!",
        deleteUsergroup,
        formData,
        true);
});