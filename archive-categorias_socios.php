<?php
    get_template_part('includes/header');
    //b4st_main_before();
?>
<!-- Comienzo del single -->
<!-- Header del single -->
<div id="header-categorias" class="mb-5">
  <div class="container">
    <div class="row">
      <div class=" col-md-6">
        <p class="titulo-blanco-bolder salto-titulo text-right d-none d-md-block" style="margin-top:0px;">Categorías</p>
        <p class="titulo-blanco-bolder salto-titulo text-right d-md-none" style="font-size:3em;margin-bottom:-30px;">Categorías</p>
        <p class="titulo-blanco-thin salto-titulo text-right">de socios</p>
      </div>
      <div class=" col-md-6">
        <p class="texto-blanco text-left">Puedes decidir si un 50% de tu aporte va con destino a tu deporte favorito. Por ejemplo, si eres fanático del tenis, elige destinarle la mitad del monto con el cual contribuyes mensualmente!<br>Además, tendrás acceso a diferentes beneficios según la categoría.</p>
      </div>
    </div>
  </div>   
</div>
<!-- Fin del Header -->
<!-- Section del single -->
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
    <div class="col-12 row d-md-none justify-content-around col-md-none js-selectores-ul mb-3">
      <?php while ( $categorias_socios->have_posts() ) : $categorias_socios->the_post();?>			
            <?php $icono_de_la_categoria = get_field( 'icono_de_la_categoria' ); ?>
            <?php if ( $icono_de_la_categoria ) { ?>
            <div href="" class="js-selectores-li" data-name="<?php the_field( 'nombre_de_la_categoria' ); ?>"> <img class="ml-auto mr-auto icono-selector" src="<?php echo $icono_de_la_categoria['url']; ?>" alt="<?php echo $icono_de_la_categoria['alt']; ?>" style="height:80px; width:auto;" /></div> 
      <?php } ?>
      <?php endwhile;?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="d-none d-md-block js-selectores-ul">
      <?php while ( $categorias_socios->have_posts() ) : $categorias_socios->the_post();?>			
            <?php $icono_de_la_categoria = get_field( 'icono_de_la_categoria' ); ?>
            <?php if ( $icono_de_la_categoria ) { ?>
            <div href="" class="js-selectores-li" data-name="<?php the_field( 'nombre_de_la_categoria' ); ?>"> <img class="ml-auto mr-auto icono-selector" src="<?php echo $icono_de_la_categoria['url']; ?>" alt="<?php echo $icono_de_la_categoria['alt']; ?>" style="height:130px; width:auto;" /></div> 
      <?php } ?>
      <?php endwhile;?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div id="contenedor-detalle-categoria" class="col-12 col-md-10">
      <?php while ( $categorias_socios->have_posts() ) : $categorias_socios->the_post();?>			
      <?php $icono_de_la_categoria = get_field( 'icono_de_la_categoria' ); ?>
      <?php if ( $icono_de_la_categoria ) { ?>
        <div class="w-100 p-0 m-0 detalle-categoria" id="<?php the_field( 'nombre_de_la_categoria' ); ?>">
          <div class="w-100 row p-0 m-0">
            <div class="col-12 col-md-6 d-flex">
              <img class="m-auto" style="width:300px;height:auto;" src="<?php echo $icono_de_la_categoria['url']; ?>" alt="<?php echo $icono_de_la_categoria['alt']; ?>" />
            </div>
            <div class="col-12 col-md-6">
              <p class="titulo-categoria text-center text-md-left"><?php the_field( 'titulo_categoria' ); ?></p>
              <br>
              <p class="nombre-categoria text-center text-md-left"><?php the_field( 'nombre_de_la_categoria' ); ?></p>
              <br>
              <p class="denominacion text-center text-md-left"><?php the_field( 'denominacion' ); ?></p>
              <br>
              <p class="monto-aporte text-center text-md-left"><?php the_field( 'monto_de_aporte' ); ?></p>
            </div>
          </div>
          <div class="w-100 row p-2 mt-3 ml-auto mr-auto bg-light">
            <div class="col-12 col-md-6">
              <p class="titulo-detalle text-center text-md-left">Por tu aporte recibirás:<br><span class="titulo-detalle-rojo">Kit Team Chile</span><br><span class="titulo-detalle-personalizado"><?php the_field( 'detalle_kit' ); ?><span></p>
              <?php $indumentaria_de_regalo = get_field( 'indumentaria_de_regalo' ); ?>
              <?php if ( $indumentaria_de_regalo ) { ?>
	            <img class="w-100" src="<?php echo $indumentaria_de_regalo['url']; ?>" alt="<?php echo $indumentaria_de_regalo['alt']; ?>" />
              <?php } ?>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
              <p><?php the_field( 'detalles_socio' ); ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
      <?php endwhile;?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div>
  
<div class="container">
  <div class="row d-flex justify-content-around ml-auto mr-auto">
    <div class="btn-primary p-3 d-flex center border-radius-5">
      <a class="texto-blanco text-center m-auto" href="<?php echo site_url(); ?>/contacto">Sé parte del Team Chile <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a>
    </div>
  </div>
  <a href="callto:5692222222"><div class="d-flex justify content-around btn-primary texto-blanco p-3 col-6 ml-auto mr-auto mt-3 mb-5 border-radius-5">
    <div class="m-1 text-center text-md-right align-self-center p-3"><i class="fa fa-phone fa-3x fa-rotate-90" aria-hidden="true"></i></div>
    <div class="m-1 text-center"><p><strong style="font-weight:bolder;">¿Tienes dudas?</strong><br>Ponte en contacto con nosotros</p></div>
  </div></a>
</div>


<?php endif;?>
<?php wp_reset_postdata(); ?>
<!-- Fin de section -->

<?php
    b4st_main_after();
    get_template_part('includes/footer');
?>
