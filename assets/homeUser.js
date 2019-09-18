$(document).ready(function(){
    setInterval(function(){
        $.ajax({
            url: "../Controller/homeUser_c.php", 
            dataType : "json", 
    
        }).done(function(data){
            $('tbody td').remove();
            for(let files of data) {
                let $tr = $("<tr>"); 
                $tr.append(
                    $('<td>').text(files .id_upload_file),
                    $('<td>').text(files .name),
                    $('<td>').text(files .type),
                    $('<td>').text(files .path),
                );
                $('table#tab_upload tbody').append($tr);
            }
            
        })
    }, 700);
   
});