<?php
/*
 * The Single Post
 */
?>
<!-- Header del single -->
<div id="header-noticias" class="w-100 pb-5">
  <div class="container">
    <div class="row">
      <div class="d-none d-md-block col-md-6">
        <p class="titulo-blanco-thin salto-titulo text-right"></p>
      </div>
      <div class="col-12 col-md-6">
        <p class="texto-blanco text-center text-md-left titulo-header">Lo<br>más<br><strong>Reciente</strong></p>
      </div>
    </div>
  </div>   
</div>
<!-- Fin del Header -->
<?php /* Single post loop */ if(have_posts()): while(have_posts()): the_post(); ?>
<div class="col-9 ml-auto mr-auto mt-5" role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
  <div class="row encabezado-noticia" style="height:200px;">
    <div class="col-12 col-md-6">
      <p class="text-muted text-right">
        <i class="far fa-calendar-alt mt-4"></i>&nbsp;<?php b4st_post_date(); ?>&nbsp;
      </p>
      <h1 class="d-md-none text-center text-md-right titulo-noticia-single"><?php the_title()?></h1>
      <h1 class="d-none d-md-block text-center text-md-right titulo-noticia-single"><?php the_title()?></h1>
    </div>
    <div class="col-12 col-md-6 foto-single-noticias" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">

    </div>
  </div>
</div>
<div class="col-9 ml-auto mr-auto mt-3">
  <div class="row">
    <div class="w-100 columnas-descripcion">
      <p class="mt-3"><?php the_content(); ?></p>
    </div>
  </div>
  <div class="row mt-5 border-top pt-3">
    <div class="col">
      <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> Noticia Anterior<br/>'.'%title'); ?>
    </div>
    <div class="col text-right">
      <?php next_post_link('%link', 'Siguiente Noticia <i class="fas fa-fw fa-arrow-right"></i><br/>'.'%title'); ?>
    </div>
  </div>
</div>

<?php
  // This continues in the single post loop
    if ( comments_open() || get_comments_number() ) :
      //comments_template();
      comments_template('/includes/loops/single-post-comments.php');
		endif;
  endwhile; else :
    get_template_part('includes/loops/404');
  endif;
?>