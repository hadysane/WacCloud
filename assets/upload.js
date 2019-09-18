$(document).ready(function(){
    $("form#uploadForm").submit(function(event){
        event.preventDefault(); 
        $.ajax({
            type: "POST",
            url: "../Controller/upload.php",
            dataType: "json", 
            data: $(this).serializeArray(),
            success: function(data){
                if(data == true){
                    $("#display-success").removeClass("hide");
                    $("#display-success").html("<li>File uploaded");
                } else {
                    $("#display-error").removeClass("hide");
                    $("#display-error").html(data);
                }
            }
        })
    });
});