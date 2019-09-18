$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault(); 
        $.ajax({
            type: "POST",
            url: "../Controller/login_c.php",
            dataType: "json", 
            data: $(this).serializeArray(),
            success: function(data){
                if(data == true){
                    location.replace("../View/homeUser.php");
                } else {
                    $("#display-error").removeClass("hide");
                    $("#display-error").html(data);
                }
            }
        })
    });
});