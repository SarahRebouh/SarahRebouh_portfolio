$(document).ready(function() {
    $("#formm").on("submit", function(e){                             //Generation Ajax pour affichage contenu article
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
                    $('textarea').remove();
                    $('button').remove();
                }
                else{
                    
                }
            }
        });
    });
});
