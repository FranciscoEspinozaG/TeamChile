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

    $(".owl-carousel-podios").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        margin:10,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })

    $(".owl-carousel-desportistas").owlCarousel({
        loop:false,
        nav:false,
        dots:true,
        autoplay:true,
        margin:10,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }
    });

    $(".owl-carousel-noticias").owlCarousel({
        loop:false,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:4,
            }
        }
    });

});