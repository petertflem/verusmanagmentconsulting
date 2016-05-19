<?php
/*
 * Template Name: Blog List
 */
?>

<?php do_action( '__before_main_wrapper' ); ##hook of the header with get_header ?>
<div id="main-wrapper blog-list-page" class="<?php echo implode(' ', apply_filters( 'tc_main_wrapper_classes' , array('container') ) ) ?>">

  <?php do_action( '__before_main_container' ); ##hook of the featured page (priority 10) and breadcrumb (priority 20)...and whatever you need! ?>

  <div class="container" role="main">

    <div class="<?php echo implode(' ', apply_filters( 'tc_column_content_wrapper_classes' , array('row' ,'column-content-wrapper') ) ) ?>">

      <?php do_action( '__before_article_container' ); ##hook of left sidebar?>

      <div id="content" class="<?php echo implode(' ', apply_filters( 'tc_article_container_class' , array( TC_utils::tc_get_layout(  TC_utils::tc_id() , 'class' ) , 'article-container' ) ) ) ?>">

        <?php do_action( '__before_loop' );##hooks the header of the list of post : archive, search... ?>

        <?php
          $args = array( 'numberposts' => -1);
          $posts= get_posts( $args );
          if ($posts) {
            foreach ( $posts as $post ) {
              setup_postdata($post); ?>

              <div class="row-fluid blog-post">
                <div class="span3">
                  <?php
                    // check if the post has a Post Thumbnail assigned to it.
                    if (has_post_thumbnail()) {
                      the_post_thumbnail();
                    }
                  ?>
                </div>
                <div class="span9">
                  <?php the_title(); ?>
                  <?php the_excerpt(); ?>
                </div>
              </div>

            <?php }
          } ?>

        <?php do_action( '__after_loop' );##hook of the comments and the posts navigation with priorities 10 and 20 ?>

      </div>

      <?php do_action( '__after_article_container' ); ##hook of left sidebar ?>

    </div>

  </div>

  <?php do_action( '__after_main_container' ); ?>

</div>
<?php do_action( '__after_main_wrapper' );##hook of the footer with get_footer ?>
