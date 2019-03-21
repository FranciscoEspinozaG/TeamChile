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
    <div class="col-md-3 d-flex justify-content-center">
      <a href="/teamchile/#"><img id="banderin-menu" src="/teamchile/wp-content/uploads/2019/03/banderini-23.png" alt=""></a>
    </div>
    <div class="col-5 d-flex justify-content-around row">
      <img src="/teamchile/wp-content/uploads/2019/03/pf-bco.png" alt="" style="height:60px; width:auto;">
      <img src="/teamchile/wp-content/uploads/2019/03/jumbo-bco.png" alt="" style="height:60px; width:auto;">
      <img src="/teamchile/wp-content/uploads/2019/03/13-bco.png" alt="" style="height:60px; width:auto;">
      <img src="/teamchile/wp-content/uploads/2019/03/sparta-bco.png" alt="" style="height:60px; width:auto;">
    </div>
    <div class="col-md-3 d-flex align-items-center justify-content-center">
      <img src="/teamchile/wp-content/uploads/2019/03/cta-team.gif" alt="" style="height:30px; width:auto;">
    </div>
    <div class="col-md-1 d-flex align-items-center justify-content-center pt-3 boton-menu">
     <p>/// MENU</p>
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
      <ul class="w-100 border-bottom ">
        <a  href="/teamchile/#"><li class="boton-menu text-center btn-menu">Inicio</li></a>
        <br>
        <a href="/teamchile/que-es-teamchile"><li class="boton-menu text-center btn-menu">¿Qué es Team Chile?</li></a>
        <br>
        <a href="/teamchile/#que-es-ser-socio"><li class="boton-menu text-center btn-menu">¿Qué es ser socio del Team?</li></a>
        <br>
        <a href="/teamchile/#categorias-y-beneficios"><li class="boton-menu text-center btn-menu">Categorías y<br>Beneficios</li></a>
        <br>
        <a href="/teamchile/quien-administra-los-recursos"><li class="boton-menu text-center btn-menu">¿Quién administra los recursos?</li></a>
        <br>
        <a href="/teamchile/#nuestros-sponsors"><li class="boton-menu text-center btn-menu">Sponsors</li></a>
        <br>
        <a href="/teamchile/#instagram"><li class="boton-menu text-center btn-menu">Instagram</li></a>
        <br>
        <a href="/teamchile/contacto"><li class="boton-menu text-center btn-menu">Contacto</li></a>
        <br>
      </ul>
      <div class="container d-flex justify-content-around">
        <a href="https://www.facebook.com/teamchile/" target="_blank"><img class="icon-menu" src="/teamchile/wp-content/uploads/2019/03/ico-bco-fb.png" alt=""></a>
        <a href="https://www.facebook.com/teamchile/" target="_blank"><img class="icon-menu" src="/teamchile/wp-content/uploads/2019/03/ico-bco-tw.png" alt=""></a>
        <a href="https://www.facebook.com/teamchile/" target="_blank"><img class="icon-menu" src="/teamchile/wp-content/uploads/2019/03/ico-bco-in.png" alt=""></a>
        <a href="https://www.facebook.com/teamchile/" target="_blank"><img class="icon-menu" src="/teamchile/wp-content/uploads/2019/03/ico-bco-yt.png" alt=""></a>    
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
  <div class="d-flex justify-content-around row col-md-10 col-sm-10 mr-auto ml-auto p-0 m-0">
    <div class=" row p-0 m-0  d-flex justify-content-center">
      <img src="/teamchile/wp-content/uploads/2019/03/menu-scroll-team.png" alt="" style="height:45px;width:auto;">
      <img src="/teamchile/wp-content/uploads/2019/03/menu-scroll-coch.png" alt="" style="height:45px;width:auto;">
    </div>
    <div class=" ">
      <img src="/teamchile/wp-content/uploads/2019/03/menu-scroll-cta.png" alt="" style="height:45px;width:auto;">
    </div>
    <div class=" boton-menu boton-menu-scroll">
      <p>/// MENU</p>
    </div>
  </div>
</div>
<?php b4st_navbar_after();?>
<main id="main" class="container">