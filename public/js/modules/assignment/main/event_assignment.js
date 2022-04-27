var bodyTag = $("body");

bodyTag.on("click", ".document-delete", function(event){
    var id = $(this).data("id");
    var formData = {};
    formData.id = id;
    sNotify("warning",
        "Delete Document",
        "Are you sure you want to delete this document?",
        "Yes Delete It!",
        deleteDocument,
        formData,
        true);
});


bodyTag.on("click", ".document-released", function(event){
    var id = $(this).data("id");
    var formData = {};
    formData.id = id;
    sNotify("warning",
        "Ready for release",
        "Are you sure document is ready for release?",
        "Confirm",
        releaseDocument,
        formData,
        true);
});