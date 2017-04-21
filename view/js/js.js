$(document).ready(function() {
    $(".error").html("");
    $("#formm").on("submit", function(e){                             //Generation Ajax pour afficher les popups
        e.preventDefault();
        var donnee = $(this).serialize();
        $.ajax({
            type : "POST",
            data: donnee,
            url: "controller/verif_form.php",
            success : function(e){
                if(e == "great"){
                    $('#modaleOK').css('display', 'block');
                    $('#modaleFALSE').css('display', 'none');
                    $('input').remove();
                    $(".error").html("");
                    $('textarea').remove();
                    $('button').remove();
                }
                else{
                    $(".error").html("");
                    var error = jQuery.parseJSON(e);               //Parse du JSON pour descendre dans le tableau
                    $("#errorTel").html(error.tel);
                    $("#errorName").html(error.name);
                    $("#errorMail").html(error.mail);
                    $("#errorMess").html(error.message);
                }
            }
        });
    });
});
