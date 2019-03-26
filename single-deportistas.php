<?php
    get_template_part('includes/header');
    //b4st_main_before();
?>
<!-- Comienzo del single -->
<?php $foto_deportista = get_field( 'foto_deportista' ); ?>
    <?php if ( $foto_deportista ) { ?>
 <div class="header-single-deportista background-fluid" style="background-image:url(<?php echo $foto_deportista['url']; ?>);">
   <div class="container">
    <div class="row" style="margin-top:400px;">
      <div class="col-6 d-none d-md-flex">
        <!-- Espacio vacío -->
      </div>
      <div class="col-6 d-none d-md-flex">
        <h1 class="titulo-blanco-bolder text-left"><?php the_field( 'nombre_y_apellido' ); ?></h1>
      </div>
      <!-- Solo en mobile -->
      <div class="d-md-none ml-auto mr-auto mt-5">
        <h1 class="titulo-blanco-bolder text-center" style="font-size:2em;"><?php the_field( 'nombre_y_apellido' ); ?></h1>
      </div>
    </div>
   </div>
 </div>
 <!-- divisor con descripción -->
 <div class="container pt-5">
  <p class="columnas-descripcion">
    <?php the_field( 'descripcion_del_deportista' ); ?>
  </p>
 </div>

<!-- Next/Previous Posts -->
<div class="mp_archive2">
<div id="more_posts">
    <div class="oe">
        <?php previous_post_link('%link', '« Previous post', TRUE); ?>
    </div>

    <div class="re">
        <?php next_post_link('%link', 'Next post »', TRUE); ?>
    </div>
</div>
<?php } ?>
</div>
<!-- Fin de anterior y siguiente -->

<main id="main" class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('includes/includes/includes/includes/loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->
    </div>

    <?php //get_template_part('includes/sidebar'); ?>
    
  </div><!-- /.row -->
  
</main><!-- /.container -->

<?php
    b4st_main_after();
    get_template_part('includes/footer');
?>
