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
        <h1 class="titulo-blanco-bolder text-center texto-sombra" style="font-size:2em;"><?php the_field( 'nombre_y_apellido' ); ?></h1>
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

 <!-- CARRUCEL PARA DEPORTISTAS DESTACADOS -->
<?php
$deportistas = new WP_Query(array(
'post_type' 		=> array('deportistas'),
'posts_per_page'	=> 6,
'post_status'		=> 'publish',
'orderby' 			=> 'menu_order date',
'order'   			=> 'DES',
'offset'        => 1
));
if ( $deportistas->have_posts() ) : ?>
<div class="container mt-0">
	<div class="row d-flex justify-content-around owl-carousel-desportistas owl-carousel owl-theme ml-auto mr-auto" style="width:auto; overflow:hidden">
		<?php while ( $deportistas->have_posts() ) : $deportistas->the_post();?>
			<div class="row p-3">
        <a class="w-100" href="<?php the_permalink();?>">
            <?php $foto_deportista = get_field( 'foto_deportista' ); ?>
            <?php if ( $foto_deportista ) { ?>
              <div class="w-100 foto-deportista" style="background-image:url(<?php echo $foto_deportista['url']; ?>);">			
              </div>				
            <?php } ?>
            <p><?php the_field( 'nombre_y_apellido' );?></p>
					</a>			
			</div>
		<?php endwhile;?>
	</div>
</div>
<?php endif;?>
<?php wp_reset_postdata(); ?>
<!-- TERMINO DE CARRUCEL PARA DEPORTISTAS DESTACADOS -->
<!-- BOTON VER TODOS LOS DEPORTISTAS -->

<div class="row d-flex justify-content-around ml-auto mr-auto">
  <div class="btn-primary p-3 d-flex center border-radius-5">
    <a class="texto-blanco text-center m-auto" href="<?php echo site_url(); ?>/deportistas">Ver todos los deportistas <i class="fa fa-angle-double-right" aria-hidden="true"></i>
    </a>
  </div>
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

<?php
    b4st_main_after();
    get_template_part('includes/footer');
?>
