<div class="w-100" style="height:60vh; top:0;overflow:hidden;">
  <?php $foto_deportista = get_field( 'foto_deportista' ); ?>
    <?php if ( $foto_deportista ) { ?>
	    <img class="w-100" src="<?php echo $foto_deportista['url']; ?>" alt="<?php echo $foto_deportista['alt']; ?>" />
  <?php } ?>
  
</div>

<?php
    get_template_part('includes/header');
    b4st_main_before();
?>
 <div class="container" style="margin-top:-30vh;">
   <div class="row">
     <div class="col-6"></div>
     <div class="col-6"><h1 class="titulo-blanco-bolder text-left"><?php the_field( 'nombre_y_apellido' ); ?></h1><br>
     <br>
     <br>
     <br>
     <br></div>
   </div>
 </div>


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
