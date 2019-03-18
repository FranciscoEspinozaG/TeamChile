<?php
    get_template_part('includes/header'); 
    b4st_main_before();
?>

<?php
echo do_shortcode('[rev_slider alias="slide-home"]');
$home_loop_args = array(
'post_type' => 'experience',
'posts_per_page' => 1
);
$home_loop = new WP_Query( $home_loop_args );
?>

<div class="container pt-3 pb-3 mt-5">

<?php if ( $home_loop->have_posts() ) :?>
  <div class="col-md-6" style="text-align:right;">
    </div>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row">
      <div class="col-md-6" style="text-align:right;">
          <p class="titulo-azul">Deportistas</p>
          <p class="titulo-rojo">Destacados</p>
      <a href="<?php the_permalink();?>">
        <p class="titulo-noticias-deportistas-gris"> <?php the_title()?> </p>
      </a>
      <?php the_excerpt()?>
    </div>
    <div class="col-md-6">
        <a href="<?php the_permalink();?>">
          <?php the_post_thumbnail('medium', array('class'=>'w-100')); ?>
        </a>
      </div>
     
    </article>    
  <?php endwhile; wp_reset_postdata();?>
<?php endif; ?>

</div>


  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/page-content'); ?>
      </div><!-- /#content -->
    </div>

    <?php //get_template_part('includes/sidebar'); ?>

  </div><!-- /.row -->

<?php
$home_loop_args = array(
  'post_type' => 'post',
  'posts_per_page' => 1
  );
$home_loop = new WP_Query( $home_loop_args );
?>

<div class="container pt-3 pb-3 mt-5">

<?php if ( $home_loop->have_posts() ) :?>
  <div class="col-md-6" style="text-align:right;">
    </div>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row">
      <div class="col-md-6" style="text-align:right;">
          <p class="titulo-azul">Novedades del</p>
          <p class="titulo-rojo">Team Chile</p>
      <a href="<?php the_permalink();?>">
        <p class="titulo-noticias-deportistas-gris"> <?php the_title()?> </p>
      </a>
      <?php the_excerpt()?>
    </div>
    <div class="col-md-6">
      <?php the_post_thumbnail('medium', array('class'=>'w-100')); ?>
    </div>
    </article>    
  <?php endwhile; wp_reset_postdata();?>
<?php endif; ?>

</div>

<?php 
    b4st_main_after();
    get_template_part('includes/footer'); 
?>
