<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>
<!-- Header del single -->
<div id="header-categorias" class="">
  <div class="container">
    <div class="row">
      <div class=" col-md-6">
        <p class="titulo-blanco-bolder salto-titulo text-right d-none d-md-block" style="margin-top:0px;">Todos</p>
        <p class="titulo-blanco-bolder salto-titulo text-right d-md-none" style="font-size:3em;margin-bottom:-30px;">Todos</p>
        <p class="titulo-blanco-thin salto-titulo text-right d-none d-md-block">los deportistas</p>
        <p class="titulo-blanco-thin salto-titulo text-right d-md-none destacar" style="font-size:1px;">los deportistas</p>
      </div>
      <div class=" col-md-6">
        <p class="texto-blanco text-left">Puedes decidir si un 50% de tu aporte va con destino a tu deporte favorito. Por ejemplo, si eres fanático del tenis, elige destinarle la mitad del monto con el cual contribuyes mensualmente!Además, tendrás acceso a:<br><br>- Información sobre el calendario de eventos deportivos de tus eventos favoritos.<br><br>- Participar en clínicas realizadas con nuestros deportistas.<br><br>- Descuentos en tiendas deportivas.<br><br>Y otros beneficios asociados al mundo del deporte!</p>
      </div>
    </div>
  </div>   
</div>
<!-- Fin del Header -->

<?php
$deportistas = new WP_Query(array(
'post_type' 		=> array('deportistas'),
'posts_per_page'	=> -1,
'post_status'		=> 'publish',
'orderby' 			=> 'menu_order date',
'order'   			=> 'DES',
));
if ( $deportistas->have_posts() ) : ?>
<div class="container mt-3">
	<div class="row d-flex justify-content-around" style="width:auto; overflow:hidden">
		<?php while ( $deportistas->have_posts() ) : $deportistas->the_post();?>
			<div class="row">
				<div class="col-6">			
					<a href="<?php the_permalink();?>">
                    <?php $foto_deportista = get_field( 'foto_deportista' ); ?>
                    <?php if ( $foto_deportista ) { ?>
                    <img src="<?php echo $foto_deportista['url']; ?>" alt="<?php echo $foto_deportista['alt']; ?>" style="height:150px; width:auto;" />
                    <?php } ?>
                    <p><?php the_field( 'nombre_y_apellido' );?></p>
					</a>			
				</div>				
			</div>
		<?php endwhile;?>
	</div>
</div>
<?php endif;?>
<?php wp_reset_postdata(); ?>


<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>