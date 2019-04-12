<?php
    get_template_part('includes/header');
    //b4st_main_before();
?>

<main id="main" class="w-100">

      <div class="">
        <?php get_template_part('includes/loops/single-post', get_post_format()); ?>
      </div><!-- /#content -->

    <?php //get_template_part('includes/sidebar'); ?>

</main><!-- /.container -->

<?php
    //4st_main_after();
    get_template_part('includes/footer');
?>
