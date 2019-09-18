$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "../Controller/register_c.php",
            dataType: "json",
            data: $(this).serializeArray(),
            success: function(data) {
                if (data === true) {
                    $("#display-error").html("");
                    $("#display-error").addClass("hide");
                    $("#display-success").removeClass("hide");
                    $("#display-success").html("<p>You are registered on My cloud</p>");
                } else {
                    $("#display-error").removeClass("hide");
                    $("#display-error").html(data);
                }
            }
        })
    });
});
