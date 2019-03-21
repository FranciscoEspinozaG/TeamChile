$(document).ready(function(){
    
    $( ".boton-menu" ).click(function(){
        $(".navbar").toggleClass("menu-desaparece");
    });

    /*$(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 200) {
        console.log('200');
        $('#barra-menu').removeClass('fixed-top');
        } else {
        $('#barra-menu').addClass('fixed-top');
        }
    });*/

});