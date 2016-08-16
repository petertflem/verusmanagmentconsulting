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



            <?php do_action( '__before_article_container' ); ##hook of left sidebar?>



                <div id="content" class="<?php echo implode(' ', apply_filters( 'tc_article_container_class' , array( TC_utils::tc_get_layout(  TC_utils::tc_id() , 'class' ) , 'article-container' ) ) ) ?>">

                  <div class="row-fluid contact-information visible-phone">
                    <ul>
                      <li class="name">Rebecca Hansen</li>
                      <li class="title">Lederutvikler</li>
                      <li>
                        <a href="tel:+4793845559">+47 938 45 559</a>
                      </li>
                      <li>
                        <a href="mailto:rebecce@vmc.no">rebecce@vmc.no</a>
                      </li>
                      <li>
                        <a href="#">LinkedIn</a>
                      </li>
                    </ul>
                  </div>

                  <div class="row-fluid hidden-phone">
                    <div class="span3 reb1 contact-picture"></div>
                    <div class="span3 reb2 contact-picture"></div>
                    <div class="span3 reb3 contact-picture"></div>
                    <div class="span3 reb4 contact-picture"></div>
                  </div>

                  <div class="row-fluid contact-information hidden-phone">
                    <div class="contact-information-list">
                      <ul>
                        <li class="name">Rebecca Hansen</li>
                        <li class="title">Lederutvikler</li>
                        <li class="phonenumber">
                          <a href="tel:+4793845559">+47 938 45 559</a>
                        </li>
                        <li class="email">
                          <a href="mailto:rebecce@vmc.no">rebecce@vmc.no</a>
                        </li>
                        <li class="linkedin">
                          <a href="#">LinkedIn</a>
                        </li>
                        <li>
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
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="row-fluid">
                    <div class="span12">
                      <dev class="visible-phone">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/reb2.jpg" class="profile-picture" alt="Bilde av Rebecca Hansen" />
                      </div>
                    </div>
                  </div>

                </div><!--.article-container -->



           <?php do_action( '__after_article_container' ); ##hook of left sidebar ?>



        </div><!--.row -->

    </div><!-- .container role: main -->



    <?php do_action( '__after_main_container' ); ?>



</div><!-- //#main-wrapper -->



<?php do_action( '__after_main_wrapper' );##hook of the footer with get_get_footer ?>
