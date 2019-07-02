<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

<div id="barramenu" class="d-flex fixed-top ml-auto mr-auto ">
  <div class="row ml-auto mr-auto w-100 p-2">
    <div class="d-none d-xl-flex justify-content-center ml-auto mr-auto">
      <a href="<?php echo site_url(); ?>/#"><img id="banderin-menu" src="<?php bloginfo('template_directory'); ?>/assets/img/banderini-23.png" alt=""></a>
    </div>
    <?php
      $auspiciadores = new WP_Query(array(
        'post_type' 		=> 'auspiciadores',
        'posts_per_page'	=> -1
      ));
      if ( $auspiciadores->have_posts() ) : ?>
    <div class="d-none d-xl-flex justify-content-around mr-1 row w-auto" style="margin-left:10%; width:30%; max-whidth:550px; min-width:500px;">
    <?php while ( $auspiciadores->have_posts() ) : $auspiciadores->the_post();?>
          <?php $logo_blanco = get_field( 'logo_blanco' ); ?>
          <?php if ( $logo_blanco ) { ?>
	          <a target="blank" href="<?php the_field( 'web_auspiciador' ); ?>"><img class="icono-sponsor-blanco" src="<?php echo $logo_blanco['url']; ?>" alt="<?php echo $logo_blanco['alt']; ?>" /></a>
          <?php } ?>
          <?php endwhile; wp_reset_postdata(); ?>
    </div>
<?php endif; ?>
    <div class="d-flex align-items-center justify-content-center m-auto">
      <a href="<?php echo site_url();?>/hazte-socio"><img src="<?php bloginfo('template_directory'); ?>/assets/img/cta-team.gif" alt="" style="height:30px; width:auto;"></a>
    </div>
    <div class="align-items-center boton-menu m-auto">
      <p class="mt-1 mb-0"><i class="fa fa-bars" aria-hidden="true"></i> MENÚ</p>
    </div>
  </div>
</div>

<nav id="navbar" class="navbar navbar-expand-md menu-desaparece">
  <div class="container">

    <?php //b4st_navbar_brand();?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse row d-flex align-items-center ml-auto mr-auto col-8 " id="navbarDropdown" style="color:white;">
      <p class="boton-menu text-center w-100 mb-5">X Cerrar Menú</p>
      <ul class="w-100 border-bottom">
        <a href="<?php echo site_url(); ?>/#"><li class="boton-menu text-center btn-menu m-2">Inicio</li></a>
        <a href="<?php echo site_url(); ?>/que-es-teamchile"><li class="boton-menu text-center btn-menu m-2">¿Qué es Team Chile?</li></a>
        <a href="<?php echo site_url(); ?>/que-es-ser-socio"><li class="boton-menu text-center btn-menu m-2">¿Qué es ser socio del Team Chile?</li></a>
        <a href="<?php echo site_url(); ?>/categorias_socios"><li class="boton-menu text-center btn-menu m-2">Categorías de Socios</li></a>
        <a href="<?php echo site_url(); ?>/quien-administra-los-recursos"><li class="boton-menu text-center btn-menu m-2">¿Quién administra los recursos?</li></a>
        <a href="<?php echo site_url(); ?>/#nuestros-sponsors"><li class="boton-menu text-center btn-menu m-2">Sponsors</li></a>
        <a href="<?php echo site_url(); ?>/#instagram"><li class="boton-menu text-center btn-menu m-2">Instagram</li></a>
        <a href="<?php echo site_url(); ?>/contacto"><li class="boton-menu text-center btn-menu m-2">Contacto</li></a>
      </ul>
      <div class="container d-flex justify-content-around">
        <a href="https://www.facebook.com/teamchile/" target="_blank"><img class="icon-menu" src="<?php bloginfo('template_directory'); ?>/assets/img/ico-bco-fb.png" alt=""></a>
        <a href="https://twitter.com/TeamChile_COCH" target="_blank"><img class="icon-menu" src="<?php bloginfo('template_directory'); ?>/assets/img/ico-bco-tw.png" alt=""></a>
        <a href="https://www.instagram.com/teamchile_coch/" target="_blank"><img class="icon-menu" src="<?php bloginfo('template_directory'); ?>/assets/img/ico-bco-in.png" alt=""></a>
        <a href="https://www.youtube.com/channel/UCBDTU9lVrB9NZn2HwMUDp-w" target="_blank"><img class="icon-menu" src="<?php bloginfo('template_directory'); ?>/assets/img/ico-bco-yt.png" alt=""></a>    
      </div>
      <?php
      //  wp_nav_menu( array(
      //    'theme_location'  => 'navbar',
      //    'container'       => false,
      //    'menu_class'      => '',
      //    'fallback_cb'     => '__return_false',
      //    'items_wrap'      => '<ul id="%1$s" class="mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
      //    'depth'           => 2,
      //    'walker'          => new b4st_walker_nav_menu()
      //  ) );
      ?>
      <?php //b4st_navbar_search();?>    
    </div>

  </div>
</nav>
<div id="menu-scroll" class="w-100 fixed-top esconde-menu-scroll p-1">
  <div class="d-flex justify-content-around row mr-auto ml-auto p-0 m-0">
    <a href="<?php echo site_url();?>/#" class="m-auto d-none d-md-block">
      <div class=" row p-0 m-auto d-flex justify-content-center">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu-scroll-team.png" alt="" style="height:45px;width:auto;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu-scroll-coch.png" alt="" style="height:45px;width:auto;">
      </div>
    </a>
    <div class="m-auto">
    <a href="<?php echo site_url();?>/hazte-socio"><img src="<?php bloginfo('template_directory'); ?>/assets/img/menu-scroll-cta.png" alt="" style="height:45px;width:auto;"></a>
    </div>
    <div class=" boton-menu boton-menu-scroll align-items-center m-auto">
      <p class="m-0"><i class="fa fa-bars" aria-hidden="true"></i> MENÚ</p>
    </div>
  </div>
</div>
<?php b4st_navbar_after();?>
<main id="main" class="">