<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>

<?php
if ( wp_is_mobile() ) {
  echo do_shortcode('[rev_slider alias="slidehome2"]');
}else {
  echo do_shortcode('[rev_slider alias="slide-home"]');
}
?>

<!-- CATEGORIAS -->
<h1 class="nombre-categoria ml-auto mr-auto text-center mt-3 mb-3">Categorías de socios</h1>
<?php
$categorias_socios = new WP_Query(array(
'post_type' 		=> array('categorias_socios'),
'posts_per_page'	=> -1,
'post_status'		=> 'publish',
'orderby' 			=> 'menu_order date',
'order'   			=> 'ASC',
));
if ( $categorias_socios->have_posts() ) : ?>
<div class="container">
  <div class="row">
            <?php while ( $categorias_socios->have_posts() ) : $categorias_socios->the_post();?>			
            <?php $icono_de_la_categoria = get_field( 'icono_de_la_categoria' ); ?>
            <?php if ( $icono_de_la_categoria ) { ?>
              <div class="js-selectores-li icono-en-header bg-light border-radius-5 pt-5 col-12 col-md-4 d-inline-block align-items-center" data-name="<?php the_field( 'nombre_de_la_categoria' ); ?>">
                <p class="titulo-categoria-home text-center w-100"><?php the_field( 'titulo_categoria' ); ?></p>
                <br>
                <p class="nombre-categoria-home text-center"><?php the_field( 'nombre_de_la_categoria' ); ?></p>
                <br>
                <p class="denominacion-home text-center"><?php the_field( 'denominacion' ); ?></p>
                <br>
                <p class="monto-aporte-home text-center"><?php the_field( 'monto_de_aporte' ); ?></p>
                <div class="d-flex">
                  <a class="ml-auto mr-auto" href="<?php echo site_url(); ?>/categorias_socios">
                    <img class="ml-auto mr-auto" src="<?php echo $icono_de_la_categoria['url']; ?>" alt="<?php echo $icono_de_la_categoria['alt']; ?>" style="height:180px; width:auto;" />
                  </a>
                </div>
            </div>
      <?php } ?>
      <?php endwhile;?>
      <?php wp_reset_postdata(); ?>
  </div>
</div>    
<?php endif; ?>

<div class="row d-flex justify-content-around ml-auto mr-auto">
  <div class="btn-primary p-3 d-flex center border-radius-5">
    <a class="texto-blanco text-center m-auto" href="<?php echo site_url(); ?>/categorias_socios">Ver todas las categorias <i class="fa fa-angle-double-right" aria-hidden="true"></i>
    </a>
  </div>
</div>

<!--ACÁ VA SECCIÓN DE INSTRAGRAM -->
<h1 class="nombre-categoria ml-auto mr-auto text-center mt-5 mb-3">Nuestro instagram</h1>
<div id="instagram" class="w-100">

  <div class="container mt-3 mb-5">
    
    <?php echo do_shortcode('[elfsight_instagram_feed id="1"]') ;?>
    
  </div>
  
</div>
<?php
$home_loop_args = array(
  'post_type' => 'deportistas',
  'posts_per_page' => 1,
);
$home_loop = new WP_Query( $home_loop_args );
?>
<!-- FIN DE INSTAGRAM -->
<!-- ACÁ VAN LAS NOTICIAS -->

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <?php the_content();?>
    </div>
  </div>
</div>
<?php endwhile; 
wp_reset_postdata();
endif;
?>
<?php
/*$entradas = new WP_Query(array(
'post_type' 		=> 'post',
'posts_per_page'	=> 1,
'post_status'		=> 'publish',
'orderby' 			=> 'menu_order date',
'order'   			=> 'DES',
));
if ( $entradas->have_posts() ) : ?>
<?php while ( $entradas->have_posts() ) : $entradas->the_post();?>
<main id="main" class="container mt-5">
  <div class="row p-0 m-0">
      <div class="col-12 col-md-6 ">
        <a href="<?php the_permalink();?>">
          <h1 class="titulo-noticia-single text-center text-md-right ">
            <?php the_title();?>
          </h1>
          <p class="titulo-noticia-single text-center w-100">
            <?php the_excerpt();?>Ver más
          </p>
        </a>
      </div>
      <div class="col-12 col-md-6 foto-single-noticias" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">

      </div>
    </div><!-- /.row -->
  </main><!-- /.container -->
<?php endwhile; wp_reset_postdata();?>
<?php endif; */?>
<!-- NOTICIAS DESDE COCH -->
<div class="container mt-5 post-coch-xl">
</div>

<hr class="container">

<div class="container mt-5">
  <div class="row posts-coch">
  </div>
</div>

<?php
/*$entradas = new WP_Query(array(
'post_type' 		=> 'post',
'posts_per_page'	=> -1,
'post_status'		=> 'publish',
'orderby' 			=> 'menu_order date',
'order'   			=> 'DES',
'offset'        => 1
));
if ( $entradas->have_posts() ) : ?>
<div class="container mt-3">
  <div class="row d-flex justify-content-around owl-carousel-noticias owl-carousel owl-theme ml-auto mr-auto">
    <?php while ( $entradas->have_posts() ) : $entradas->the_post();?>
    <a href="<?php the_permalink();?>">
      <div class="link-carousel">
        <div class="pt-5 pb-5 foto-noticias-carousel" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
        </div>
        <p class="bajada-carousel">
          <?php the_title();?>
        </p>
        <p class="text-muted" style="font-size:.8rem;">
          <i class="far fa-calendar-alt"></i>&nbsp;<?php b4st_post_date(); ?>&nbsp;
        </p>
      </div>
    </a>
    <?php endwhile; ?>
  </div>
</div>
<?php endif; */?>
<!-- BOTON VER TODAS LAS NOTICIAS -->

<div class="row d-flex justify-content-around ml-auto mr-auto">
  <div class="btn-primary p-3 d-flex center border-radius-5">
    <a class="texto-blanco text-center m-auto" target="_balnk" href="https://www.coch.cl/noticias-coch/">Ver todas las noticias <i class="fa fa-angle-double-right" aria-hidden="true"></i>
    </a>
  </div>
</div>
<!-- ACÁ TERMINAN LAS NOTICIAS -->

<!-- AUSPICIADORES -->
<?php
$auspiciadores = new WP_Query(array(
  'post_type' 		=> 'auspiciadores',
  'posts_per_page'	=> -1
));
if ( $auspiciadores->have_posts() ) : ?>
    <div id="nuestros-sponsors" class="d-flex align-items-center w-100 mt-4 p-5" style="">
      <div class="container d-flex justify-content-center row w-100 ml-auto mr-auto">
        <div class="w-100">
          <p class="titulo-blanco-thin">Nuestros</p>
          <p class="titulo-blanco-bolder">Sponsors</p>
        </div>
        <div class="bg-light border-radius-5 pt-4 pb-4 owl-carousel-sponsors owl-carousel owl-theme">
          <?php while ( $auspiciadores->have_posts() ) : $auspiciadores->the_post();?>
            <?php $logo_color = get_field( 'logo_color' ); ?>
            <?php if ( $logo_color ) { ?>
	            <a target="blank" class="text-center p-2" href="<?php the_field( 'web_auspiciador' ); ?>"><img class="icono-sponsor" src="<?php echo $logo_color['url']; ?>" alt="<?php echo $logo_color['alt']; ?>" /></a>
          <?php } ?>
          <?php endwhile; wp_reset_postdata(); ?>       
        </div>
      </div>
    </div>
<?php endif; ?>

<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>
