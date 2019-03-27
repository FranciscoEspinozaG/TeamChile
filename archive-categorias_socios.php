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
        <p class="texto-blanco text-left"><?php the_field( 'detalles_socio' ); ?></p>
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
<div class="container mt-3">
  <div class="row">

	  <div class="col-md-2 align-items-center" style="">
	  	<?php while ( $categorias_socios->have_posts() ) : $categorias_socios->the_post();?>			
            <?php $icono_de_la_categoria = get_field( 'icono_de_la_categoria' ); ?>
            <?php if ( $icono_de_la_categoria ) { ?>
              <img class="ml-auto mr-auto" src="<?php echo $icono_de_la_categoria['url']; ?>" alt="<?php echo $icono_de_la_categoria['alt']; ?>" style="height:130px; width:auto;" />
      <?php } ?>
      <?php endwhile;?>
      <?php wp_reset_postdata(); ?>
    </div>

    <div class="col-md-10 p-0 m-0">
    <?php while ( $categorias_socios->have_posts() ) : $categorias_socios->the_post();?>			
            <?php $icono_de_la_categoria = get_field( 'icono_de_la_categoria' ); ?>
            <?php if ( $icono_de_la_categoria ) { ?>
      <div class="w-100 row p-0 m-0" style="height:50%;">
        <div class="col-6 d-flex">
        <?php $icono_de_la_categoria = get_field( 'icono_de_la_categoria' ); ?>
        <?php if ( $icono_de_la_categoria ) { ?>
	        <img class="m-auto" style="width:auto;height:100%;max-height:100%;" src="<?php echo $icono_de_la_categoria['url']; ?>" alt="<?php echo $icono_de_la_categoria['alt']; ?>" />
        <?php } ?>
        </div>
        <div class="col-6">
          <p class="titulo-categoria"><?php the_field( 'titulo_categoria' ); ?></p>
          <br>
          <p class="nombre-categoria"><?php the_field( 'nombre_de_la_categoria' ); ?></p>
          <br>
          <p class="denominacion"><?php the_field( 'denominacion' ); ?></p>
          <br>
          <p class="monto-aporte"><?php the_field( 'monto_de_aporte' ); ?></p>
        </div>
      </div>
      <div class="w-100 row p-2 m-0 bg-light" style="min-height:50%;height:auto;">
        <div class="col-6">
              <p class="titulo-detalle">Por tu aporte recibirás:<br><span class="titulo-detalle-rojo">Kit Team Chile</span><br><span class="titulo-detalle-personalizado">Polera Team Chile<span></p>
            <?php $indumentaria_de_regalo = get_field( 'indumentaria_de_regalo' ); ?>
            <?php if ( $indumentaria_de_regalo ) { ?>
	            <img class="w-100" src="<?php echo $indumentaria_de_regalo['url']; ?>" alt="<?php echo $indumentaria_de_regalo['alt']; ?>" />
            <?php } ?>
        </div>
        <div class="col-6 d-flex align-items-center tex" style="border-left:3px solid white;">
          <p><?php the_field( 'detalles_socio' ); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
    <?php endwhile;?>
    <?php wp_reset_postdata(); ?>

<div class="container">
  <button>
    Sé parte del team
  </button>
</div>

<?php endif;?>
<?php wp_reset_postdata(); ?>
<!-- Fin de section -->

<?php
    b4st_main_after();
    get_template_part('includes/footer');
?>
