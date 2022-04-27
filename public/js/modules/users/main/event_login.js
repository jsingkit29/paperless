var bodyTag = $("body");

bodyTag.on("click", "#go-to-main-site", function(event){
    event.preventDefault();
    loadMainSite()
});