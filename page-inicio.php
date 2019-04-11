<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>

<?php
if ( wp_is_mobile() ) {
  echo do_shortcode('[rev_slider alias="slidehome2"]');
}else {
  echo do_shortcode('[rev_slider alias="slide-home"]');
}
?>

<!-- CATEGORIAS -->
<h1 class="nombre-categoria ml-auto mr-auto text-center mt-3 mb-3">Categorías de socios</h1>
<?php
$categorias_socios = new WP_Query(array(
'post_type' 		=> array('categorias_socios'),
'posts_per_page'	=> -1,
'post_status'		=> 'publish',
'orderby' 			=> 'menu_order date',
'order'   			=> 'ASC',
));
if ( $categorias_socios->have_posts() ) : ?>
<div class="container">
  <div class="row">
            <?php while ( $categorias_socios->have_posts() ) : $categorias_socios->the_post();?>			
            <?php $icono_de_la_categoria = get_field( 'icono_de_la_categoria' ); ?>
            <?php if ( $icono_de_la_categoria ) { ?>
            <div class="js-selectores-li bg-light border-radius-5 pt-5 col-6 col-md-4 d-inline-block align-items-center" data-name="<?php the_field( 'nombre_de_la_categoria' ); ?>">
              <p class="titulo-categoria-home text-center w-100"><?php the_field( 'titulo_categoria' ); ?></p>
              <br>
              <p class="nombre-categoria-home text-center"><?php the_field( 'nombre_de_la_categoria' ); ?></p>
              <br>
              <p class="denominacion-home text-center"><?php the_field( 'denominacion' ); ?></p>
              <br>
              <p class="monto-aporte-home text-center"><?php the_field( 'monto_de_aporte' ); ?></p>
              <div class="d-flex">
                <img class="ml-auto mr-auto" src="<?php echo $icono_de_la_categoria['url']; ?>" alt="<?php echo $icono_de_la_categoria['alt']; ?>" style="height:180px; width:auto;" />
              </div>
            </div> 
      <?php } ?>
      <?php endwhile;?>
      <?php wp_reset_postdata(); ?>
  </div>
</div>    
<?php endif; ?>
<div class="vc_btn3-container vc_btn3-center mt-3">
  <a href="<?php echo site_url(); ?>/categorias_socios" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-inverse">
    Ver todas las categorias
  </a>
</div>
<!--ACÁ VA SECCIÓN DE INSTRAGRAM -->

<h1 class="nombre-categoria ml-auto mr-auto text-center mt-3 mb-3">Acá va instagram</h1>

<?php
$home_loop_args = array(
  'post_type' => 'deportistas',
  'posts_per_page' => 1,
);
$home_loop = new WP_Query( $home_loop_args );
?>
<!-- DEPORTISTAS DESTACADOS -->
<div class="container p-3 mt-1" style="position:relative;z-index:1;">

<?php if ( $home_loop->have_posts() ) :?>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row  text-center text-md-right">
      <div class="col-md-6">
        <div class="w-100 text-center text-md-right">
          <p class="titulo-azul text-center text-md-right" style="margin-bottom:-5px;">Deportistas</p>
          <p class="titulo-rojo salto-titulo text-center text-md-right" style="margin-bottom:-5px;">Destacados</p>
        </div>
      <a href="<?php the_permalink();?>">
        <p class="titulo-noticias-deportistas-gris"> <?php the_title()?> </p>
      </a>
      <a href="<?php the_permalink();?>">
        <p><?php the_field( 'extracto' ); ?>...</p>
      </a>
    </div>
    <a href="<?php the_permalink();?>" class="col-md-6" style="overflow:hidden;">
      <div class="w-100">
          <?php $foto_deportista = get_field( 'foto_deportista' ); ?>
            <?php if ( $foto_deportista ) { ?>
	            <img src="<?php echo $foto_deportista['url']; ?>" alt="<?php echo $foto_deportista['alt']; ?>" style="height:auto; width:100%;" />
            <?php } ?>
      </div>
    </a>
     
    </article>    
  <?php endwhile; wp_reset_postdata();?>
  <?php endif; ?>

</div>
<!-- TERMINO DE DEPORTISTAS DESTACADOS -->
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
	<div class="row d-flex justify-content-around owl-carousel-desportistas owl-carousel owl-theme" style="width:auto; overflow:hidden">
		<?php while ( $deportistas->have_posts() ) : $deportistas->the_post();?>
			<div class="row p-3">
				<div class="col-6">			
					<a href="<?php the_permalink();?>">
          <?php $foto_deportista = get_field( 'foto_deportista' ); ?>
          <?php if ( $foto_deportista ) { ?>
            <img src="<?php echo $foto_deportista['url']; ?>" alt="<?php the_field( 'nombre_y_apellido' );?>" style="height:150px; width:auto;" />
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

<div class="container pt-3 pb-3 mt-1">

<?php if ( $home_loop->have_posts() ) :?>
  <div class="col-md-6" style="text-align:right;">
    </div>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row">
      <div class="col-md-6">
      <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('medium', array('class'=>'w-100')); ?>
      </a>
      </div>
      <div class="col-md-6 text-left">
        <a href="<?php the_permalink();?>">
          <p class="titulo-noticias-deportistas-gris text-left"> <?php the_title()?> </p>
          <?php the_excerpt()?><p class="ver-mas">Ver más...</p>
        </a>
      </div>
    </article>    
  <?php endwhile?>
<?php endif; ?>
</div>
<!-- BOTON VER TODAS LAS NOTICIAS -->
<div class="vc_btn3-container vc_btn3-center mt-3">
  <a href="<?php echo site_url(); ?>/noticias" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-inverse">
    Ver las noticias
  </a>
</div>

<!-- AUSPICIADORES -->
<?php
$auspiciadores = new WP_Query(array(
  'post_type' 		=> 'auspiciadores',
  'posts_per_page'	=> -1
));
if ( $auspiciadores->have_posts() ) : ?>
    <div id="nuestros-sponsors" class="d-flex align-items-center w-100 mt-4 p-5" style="">
      <div class="container d-flex justify-content-center row w-100 ml-auto mr-auto">
        <div class="w-100">
          <p class="titulo-blanco-thin">Nuestros</p>
          <p class="titulo-blanco-bolder">Sponsors</p>
        </div>
        <div class="w-100 bg-light border-radius-5 row p-3 justify-content-around">
        <?php while ( $auspiciadores->have_posts() ) : $auspiciadores->the_post();?>
          <?php $logo_color = get_field( 'logo_color' ); ?>
          <?php if ( $logo_color ) { ?>
	          <a target="blank" href="<?php the_field( 'web_auspiciador' ); ?>"><img class="icono-sponsor" src="<?php echo $logo_color['url']; ?>" alt="<?php echo $logo_color['alt']; ?>" /></a>
          <?php } ?>
          <?php endwhile; wp_reset_postdata(); ?>       
        </div>
      </div>
    </div>
<?php endif; ?>

<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>
