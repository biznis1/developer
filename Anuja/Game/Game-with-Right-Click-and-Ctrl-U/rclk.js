$(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
			alert("Nice approach, you are in my zone. So, not allowed my dear.");
        return false;
    });
    
    //Disable part of page
   /* $("#id").on("contextmenu",function(e){
        return false;
    });*/
});