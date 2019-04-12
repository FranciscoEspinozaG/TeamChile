<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>
  
    <div class="container destacar">
    <h2>
      <a href="<?php the_permalink(); ?>">
          <?php the_title()?>
        </a>
      </h2>
      <p class="text-muted">
        <i class="far fa-calendar-alt"></i>&nbsp;<?php b4st_post_date(); ?>&nbsp;<!-- |
        <i class="far fa-user"></i>&nbsp; <?php _e('Por ', 'b4st'); the_author_posts_link(); ?>&nbsp;| 
        <i class="far fa-comment"></i>&nbsp;<a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), '', 'b4st' ), number_format_i18n( get_comments_number() ) ); ?></a>-->
      </p>
    </div>
    <section>
      <?php the_post_thumbnail(); ?>
      
      <?php if ( has_excerpt( $post->ID ) ) {
        the_excerpt();
        ?><a href="<?php the_permalink(); ?>">
    	<?php _e( 'Continue reading...', 'b4st' ) ?>
    </a>
  	<?php } else {
      the_content( __('Continue reading...', 'b4st' ) );
	  } ?>
  </section>
