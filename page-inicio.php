<?php
    get_template_part('includes/header'); 
    b4st_main_before();
    echo do_shortcode('[rev_slider alias="slide-home"]');
    $home_loop_args = array(
      'post_type' => 'deportistas',
      'posts_per_page' => 1
    );
$home_loop = new WP_Query( $home_loop_args );
?>
<!-- DEPORTISTAS DESTACADOS -->
<div class="container pt-3 pb-3 mt-5" style="position:relative;z-index:1;">

<?php if ( $home_loop->have_posts() ) :?>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row">
      <div class="col-md-6" style="text-align:right;">
          <p class="titulo-azul">Deportistas</p>
          <p class="titulo-rojo salto-titulo">Destacados</p>
      <a href="<?php the_permalink();?>">
        <p class="titulo-noticias-deportistas-gris"> <?php the_title()?> </p>
      </a>
      <a href="<?php the_permalink();?>">
        <p><?php the_field( 'extracto' ); ?>...</p>
      </a>
    </div>
    <a href="<?php the_permalink();?>" class="col-md-6" style="height:300px; overflow:hidden;">
      <div class="w-100">
          <?php $foto_deportista = get_field( 'foto_deportista' ); ?>
            <?php if ( $foto_deportista ) { ?>
	            <img src="<?php echo $foto_deportista['url']; ?>" alt="<?php echo $foto_deportista['alt']; ?>" style="height:300px; width:auto;" />
            <?php } ?>
      </div>
    </a>
     
    </article>    
  <?php endwhile; wp_reset_postdata();?>
  <?php endif; ?>

</div>
<!-- TERMINO DE DEPORTISTAS DESTACADOS -->
<!-- CARRUCEL PARA DEPORTISTAS DESTACADOS -->
<div class="container pt-3 pb-3 mt-5 destacar" style="position:relative;z-index:1;">

<?php if ( $home_loop->have_posts() ) :?>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>

    <?php endwhile; wp_reset_postdata();?>
  <?php endif; ?>

</div>
<!-- TERMINO DE CARRUCEL PARA DEPORTISTAS DESTACADOS -->
<!-- BOTON VER TODOS LOS DEPORTISTAS -->
<div class="vc_btn3-container vc_btn3-center mt-3">
  <a href="<?php echo site_url(); ?>/deportistas" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-inverse">
    Ver los deportistas
  </a>
</div>


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

<div id="nuestros-sponsors" class="d-flex align-items-center w-100 vc_custom_1552942342630" style="">
  <div class="container justify-content-center row w-100 ml-auto mr-auto">
    <div class="w-100">
      <p class="titulo-blanco-thin">Nuestros</p>
      <p class="titulo-blanco-bolder">Sponsors</p>
    </div>
    <div class="p-5 bg-light border-radius-5 d-flex justify-content-around wpb_animate_when_almost_visible wpb_flipInX flipInX w-100">
      <img class="icono-sponsor" src="<?php bloginfo('template_directory'); ?>/assets/img/pf-alimentos.png" alt="">
      <img class="icono-sponsor" src="<?php bloginfo('template_directory'); ?>/assets/img/logo-jumbo.png" alt="">
      <img class="icono-sponsor" src="<?php bloginfo('template_directory'); ?>/assets/img/canal-13.png" alt="">
      <img class="icono-sponsor" src="<?php bloginfo('template_directory'); ?>/assets/img/logo-sparta.png" alt="">
    </div>
  </div>
  <div>
    
  </div>
</div>

<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>
