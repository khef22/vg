<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EasyBlog
 */

?>

<footer class="dt-footer">
    <div class="dt-footer-bar">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'dt-front-page-after-content' ) ) : ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="dt-front-sidebar-wrap">
                            <?php dynamic_sidebar( 'dt-front-page-after-content' ); ?>
                        </div><!-- .dt-front-sidebar-wrap -->
                    </div><!-- .col-lg-12 -->
                <?php endif; ?>
                <div class="col-lg-12 col-md-12 dt-footer-text">
                    <div class="dt-copyright">

                        <?php _e( '&copy;', 'easyblog' ); ?> <?php echo date( 'Y' ); ?><?php _e( ' VALENTIN GABUTAN.', 'easyblog' ); ?><?php _e( ' ALL RIGHTS RESERVED.', 'easyblog' )?>
                        </br>

                        <?php _e( 'DESIGNED BY VALENTIN GABUTAN. POWERED BY TUMBLR.', 'easyblog' ); ?>

                    </div><!-- .dt-copyright -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .dt-footer-bar -->
</footer><!-- .dt-footer -->

<a id="back-to-top" class="transition35"><i class="fa fa-angle-up"></i></a><!-- #back-to-top -->

<?php wp_footer(); ?>

</body>
</html>
