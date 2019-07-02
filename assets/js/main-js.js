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
    });

    $(".owl-carousel-sponsors").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        autoplay:true,
        margin:5,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                nav:true,
            },
            600:{
                items:2,
            },
            1000:{
                items:4,
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

    // Post.
    var posts = $( '.post-coch-xl' );

    // Loading.
    posts.html( '<p>⌛️ Cargando...</p>' );

    // Get JSON Data from API URI. 10 posts will be returned by default.
    $.getJSON( 'https://coch.cl/wp-json/wp/v2/posts?per_page=1&categories=357', function( data ) {
    		// Empty.
            posts.empty();
            //console.log(data);
    
    	// Loop through each post.
    	 $.each( data, function( i, post ){
    		// Log the post data.
        
    		// Post Link.
    		const link = post.link;
        
    		// Post Title.
    		const title = post.title.rendered;
        
    		// Post Excerpt.
            const excerpt = post.excerpt.rendered;
            
            //url de la  imagen
            const image = post.better_featured_image.media_details.file;
            
            console.log(image);
            
    		// Post Content.
    		const content = post.content.rendered;
            
            // Building the HTML.
    		posts.append( '<a target="_blank" class="w-100" href=' + link + ' >' + '<div class="w-100 row p-0 m-0">' + '<div class="col-12 col-md-6">' + '<h1 class="titulo-noticia-single text-center text-md-right ">' + title + '</h1>' + '<p class="titulo-noticia-single text-center text-xl-right w-100">' + excerpt + '</p>' + '</div>' + '<div class="col-12 col-md-6 foto-single-noticias" style="background-image:url(https://www.coch.cl/wp-content/uploads/' + image + ');background-position:center -10%;"/>' + '</div>' + '</div>' + '</a>' );
            
    	}); 

    });

    
    // Post.
    var postsDiv = $( '.posts-coch' );

    // Loading.
    postsDiv.html( '<p>⌛️ Cargando...</p>' );

    // Get JSON Data from API URI. 10 posts will be returned by default.
    $.getJSON( 'https://coch.cl/wp-json/wp/v2/posts?per_page=4&offset=1&categories=357', function( data ) {
    		// Empty.
    		postsDiv.empty();
    
    	// Loop through each post.
    	$.each( data, function( i, post ){
    		// Log the post data.
        
    		// Post Link.
    		const link = post.link;
        
    		// Post Title.
    		const title = post.title.rendered;
        
    		// Post Excerpt.
            //const excerpt = post.excerpt.rendered;
            
            //url de la  imagen
            const image = post.better_featured_image.media_details.file;

            console.log(image);
        
    		// Post Content.
    		const content = post.content.rendered;
        
    		// Building the HTML. 
    		postsDiv.append( '<a target="_blank" class="col-6 col-md-3" href=' + link + ' >' + '<div class="w-100"><img class="w-100" src="https://www.coch.cl/wp-content/uploads/' + image + '"/>' + title + '</div>' + '</a>' );
    	});

    });

});