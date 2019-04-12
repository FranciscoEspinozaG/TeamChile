<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>

<!-- Header del single -->
<div id="header-noticias" class="">
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-6">
        
      </div>
      <div class="col-12 col-xl-6">
        <p class="texto-blanco text-center text-xl-left titulo-header">Lo<br>más<br><strong>Reciente</strong></p>
      </div>
    </div>
  </div>   
</div>
<!-- Fin del Header -->
<?php
$entradas = new WP_Query(array(
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
<?php endif; ?>

<?php
$entradas = new WP_Query(array(
'post_type' 		=> 'post',
'posts_per_page'	=> 99999,
'post_status'		=> 'publish',
'orderby' 			=> 'menu_order date',
'order'   			=> 'DES',
'offset'        => 1
));
if ( $entradas->have_posts() ) : ?>
<div class="container mt-3">
  <div class="row d-flex justify-content-around owl-carousel-noticias owl-carousel owl-theme">
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
<?php endif; ?>


<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>
