$(document).ready(function() {
    $("#button").on("click", function(e){                             //Generation Ajax pour affichage contenu article
        e.preventDefault();

        $.ajax({
            type : "POST",
            data: ,
            url: "controller/verif_form.php",
            success : function(data){
                
            }
        });
    });
});
