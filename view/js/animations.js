//------------ Animation pour le bouton d'entrée focus sur page d'intro

$('#focus').click(function(){
    $(this).addClass("rotate-center");
    $("#focus").delay(800).fadeTo("1", 0);

    $('#gauche').delay(1000).animate({
        'left' : "-=4300px" //moves left
        });
    $('#droite').delay(1000).animate({
        'left' : "+=4300px" //moves left
        });
    setTimeout(function(){
            $(".intro").remove();
    }, 2000);
});
