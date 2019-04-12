<?php
    get_template_part('includes/header'); 
    //b4st_main_before();
?>
  <div class="row">
    <div class="">
      <div id="content" role="main">

        <?php get_template_part('includes/loops/index-loop'); ?>

      </div><!-- /#content -->
    </div>

    <?php //get_template_part('includes/sidebar'); ?>

  </div><!-- /.row -->

<?php 
    //b4st_main_after();
    get_template_part('includes/footer'); 
?>
