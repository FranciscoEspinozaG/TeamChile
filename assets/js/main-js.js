$(document).ready(function(){
    
    $( ".boton-menu" ).click(function(){
        $(".navbar").toggleClass("menu-desaparece");
    });

    /*$(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 200) {
        console.log('200');
        $('#barra-menu').addClass('esconde-barra');
        } else {
        $('#barra-menu').removeClass('esconde-barra');
        }
    });*/

    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('#barramenu').addClass('escondebarra');
            $('#menu-scroll').removeClass('esconde-menu-scroll');
        }else{
            $('#barramenu').removeClass('escondebarra');
            $('#menu-scroll').addClass('esconde-menu-scroll');
        }   
    });


    $('#contenedor-detalle-categoria > div:first-child').addClass('selected');
    $('.js-selectores-ul .js-selectores-li').each(function(){

        $(this).on('click', function(){
            var selectorId = $(this).data('name');
            $('.detalle-categoria.selected').removeClass('selected');
            $('#contenedor-detalle-categoria').find('#' + selectorId ).addClass('selected');
        });
    });

});