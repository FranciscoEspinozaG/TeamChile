<?php
    get_template_part('includes/header');
    //b4st_main_before();
?>
<!-- Comienzo del single -->
<!-- Header del single -->
<div id="header-categorias" class="">
  <div class="container">
    <div class="row">
      <div class=" col-md-6">
        <p class="titulo-blanco-bolder salto-titulo text-right d-none d-md-block" style="margin-top:0px;">Categorías</p>
        <p class="titulo-blanco-bolder salto-titulo text-right d-md-none" style="font-size:3em;margin-bottom:-30px;">Categorías</p>
        <p class="titulo-blanco-thin salto-titulo text-right">de socios</p>
      </div>
      <div class=" col-md-6">
        <p class="texto-blanco text-left"><?php the_field( 'detalles_socio' ); ?></p>
      </div>
    </div>
  </div>   
</div>
<!-- Fin del Header -->
<!-- Section del single -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
      </div>
      <div class="col-md-10">

      </div>
    </div>
  </div>
</section>
<!-- Fin de section -->

<main id="main" class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('includes/includes/includes/includes/loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
  
</main><!-- /.container -->

<?php
    b4st_main_after();
    get_template_part('includes/footer');
?>
