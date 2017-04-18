//------------ Animation pour le bouton d'entrée focus sur page d'intro

$('#focus').click(function(){
    $("body").css("overflow-x", "hidden");
    $(this).addClass("rotate-center");
    $("#focus").delay(800).fadeTo("1", 0);

    $('#gauche').delay(900).animate({
        'left' : "-4300px" //moves left
    },3000);
    $('#droite').delay(900).animate({
        'left' : "+4300px" //moves left
    }, 3000);
    setTimeout(function(){
            $(".intro").remove();
            $("body").css("overflow-x", "auto");
    }, 2000);
});
