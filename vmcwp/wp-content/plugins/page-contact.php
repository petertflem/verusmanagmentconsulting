<?php

/*

Template Name: Contact Page

*/

?>

<?php do_action( '__before_main_wrapper' ); ##hook of the header with get_header ?>

<div id="main-wrapper" class="<?php echo implode(' ', apply_filters( 'tc_main_wrapper_classes' , array('container') ) ) ?>">



    <?php do_action( '__before_main_container' ); ##hook of the featured page (priority 10) and breadcrumb (priority 20)...and whatever you need! ?>



    <div class="container contact-page" role="main">

        <div class="<?php echo implode(' ', apply_filters( 'tc_column_content_wrapper_classes' , array('row' ,'column-content-wrapper') ) ) ?>">


                <div id="content" class="<?php echo implode(' ', apply_filters( 'tc_article_container_class' , array( CZR_utils::czr_fn_get_layout(  CZR_utils::czr_fn_id() , 'class' ) , 'article-container' ) ) ) ?>">

                  <div class="row-fluid contact-information">
                    <h1>Rebecca Hansen</h1>
                    <h2 class="title">Lederutvikler</h2>
                    <a href="tel:+4793845559">+47 938 45 559</a>
                    <a class="mail" href="mailto:rebecca@vmconsulting.no">rebecca@vmconsulting.no</a>
                    <a href="#">LinkedIn</a>

                    <div class="contact-form">
                      <label role="button" class="open-contact-form" for="toggle-modal">Kontaktskjema</label>
                      <input type="checkbox" id="toggle-modal" />
                      <label role="button" class="modal-background" for="toggle-modal"></label>
                      <div class="modal">
                        <div class="modal-header">
                          <h2>Kontaktskjema</h2>
                        </div>
                        <div class="modal-body">
                          <?php if (have_posts()) : while (have_posts()) : the_post();?>
                            <?php the_content(); ?>
                          <?php endwhile; endif; ?>
                        </div>
                        <div class="modal-footer">
                          <label class="btn" for="toggle-modal" role="button">Lukk</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row-fluid">
                    <div class="span12">
                      <dev>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact-page-profile-picture.jpg" class="profile-picture" alt="Bilde av Rebecca Hansen" />
                      </div>
                    </div>
                  </div>

                </div><!--.article-container -->


        </div><!--.row -->

    </div><!-- .container role: main -->



    <?php do_action( '__after_main_container' ); ?>



</div><!-- //#main-wrapper -->



<?php do_action( '__after_main_wrapper' );##hook of the footer with get_get_footer ?>
