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

<div class="container pt-3 pb-3 mt-5" style="z-index:1000;">

<?php if ( $home_loop->have_posts() ) :?>
  <div class="col-md-6" style="text-align:right;">
    </div>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row">
      <div class="col-md-6" style="text-align:right;">
          <h2 style="font-size:2.5em;color:blue;text-transform:uppercase;font-weight:regular;">Novedades del</h2>
          <h1 style="font-size:4.5em;color:red;text-transform:uppercase;font-weight:bolder;margin-top:-30px;">Team Chile</h1>
      <a href="<?php the_permalink();?>">
        <h3 style="font-weight:bold; font-size:1.4em;text-transform:uppercase;margin-top:-10px;"> <?php the_title()?> </h3>
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

<main id="main" class="container" style="margin-top:-80px;">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/page-content'); ?>
      </div><!-- /#content -->
    </div>

    <?php //get_template_part('includes/sidebar'); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
$home_loop_args = array(
  'post_type' => 'post',
  'posts_per_page' => 1
  );
$home_loop = new WP_Query( $home_loop_args );
?>

<div class="container pt-3 pb-3 mt-5" style="z-index:1000;">

<?php if ( $home_loop->have_posts() ) :?>
  <div class="col-md-6" style="text-align:right;">
    </div>
    <?php while ($home_loop->have_posts()) : $home_loop->the_post(); ?>
    <article class="row">
      <div class="col-md-6" style="text-align:right;">
          <h2 style="font-size:2.5em;color:blue;text-transform:uppercase;font-weight:regular;">Novedades del</h2>
          <h1 style="font-size:4.5em;color:red;text-transform:uppercase;font-weight:bolder;margin-top:-30px;">Team Chile</h1>
      <a href="<?php the_permalink();?>">
        <h3 style="font-weight:bold; font-size:1.4em;text-transform:uppercase;margin-top:-10px;"> <?php the_title()?> </h3>
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
