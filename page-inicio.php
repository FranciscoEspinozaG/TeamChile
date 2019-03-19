<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>

<?php
echo do_shortcode('[rev_slider alias="slide-home"]');
$home_loop_args = array(
'post_type' => 'deportistas',
'posts_per_page' => 1
);
$home_loop = new WP_Query( $home_loop_args );
?>

<div class="container pt-3 pb-3 mt-5" style="position:relative;z-index:1;">

<?php if ( $home_loop->have_posts() ) :?>
  <div class="col-md-6" style="text-align:right;">
    </div>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row">
      <div class="col-md-6" style="text-align:right;">
          <p class="titulo-azul">Deportistas</p>
          <p class="titulo-rojo">Destacados</p>
      <a href="<?php the_permalink();?>">
        <p class="titulo-noticias-deportistas-gris"> <?php the_title()?> </p>
      </a>
      <a href="<?php the_permalink();?>">
        <?php the_excerpt()?>
      </a>
    </div>
    <div class="col-md-6">
        <a href="<?php the_permalink();?>">
          <?php the_post_thumbnail('medium', array('class'=>'w-100')); ?>
        </a>
      </div>
     
    </article>    
  <?php endwhile; wp_reset_postdata();?>
<?php endif; ?>

</div>


  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/page-content'); ?>
      </div><!-- /#content -->
    </div>

    <?php //get_template_part('includes/sidebar'); ?>

  </div><!-- /.row -->

<?php
$home_loop_args = array(
  'post_type' => 'post',
  'posts_per_page' => 1
  );
$home_loop = new WP_Query( $home_loop_args );
?>

<div class="container pt-3 pb-3 mt-5">

<?php if ( $home_loop->have_posts() ) :?>
  <div class="col-md-6" style="text-align:right;">
    </div>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row">
      <div class="col-md-6" style="text-align:right;">
          <p class="titulo-azul">Novedades del</p>
          <p class="titulo-rojo">Team Chile</p>
      <a href="<?php the_permalink();?>">
        <p class="titulo-noticias-deportistas-gris"> <?php the_title()?> </p>
        <?php the_excerpt()?><p class="ver-mas">Ver más...</p>
      </a>
    </div>
    <div class="col-md-6">
    <a href="<?php the_permalink();?>">
      <?php the_post_thumbnail('medium', array('class'=>'w-100')); ?>
    </a>
    </div>
    </article>    
  <?php endwhile; wp_reset_postdata();?>
<?php endif; ?>
</div>

<div id="nuestros-sponsors" class="vc_row wpb_row vc_row-fluid vc_row-has-fill d-flex align-items-center" style="position: relative; left: -381.5px; box-sizing: border-box; width: 1903px; padding-left: 381.5px; padding-right: 381.5px;">
  <div class="container justify-content-center" style="height:auto;">
    <div class="">
      <p class="titulo-blanco-thin">Nuestros</p>
      <p class="titulo-blanco-bolder">Sponsors</p>
    </div>
    <div class="p-5 bg-light border-radius-5 d-flex justify-content-around wpb_animate_when_almost_visible wpb_flipInX flipInX">
      <img class="icono-sponsor" src="/teamchile/wp-content/uploads/2019/03/pf-alimentos.png" alt="">
      <img class="icono-sponsor" src="/teamchile/wp-content/uploads/2019/03/logo-jumbo.png" alt="">
      <img class="icono-sponsor" src="/teamchile/wp-content/uploads/2019/03/canal-13.png" alt="">
      <img class="icono-sponsor" src="/teamchile/wp-content/uploads/2019/03/logo-sparta.png" alt="">
    </div>
  </div>
  <div>
    
  </div>
</div>

<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>
