<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EasyBlog
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-9 col-md-9">
			<div id="primary" class="content-area dt-content-area">
				<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-single', 'page' );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col-lg-9 -->

		<aside class="col-lg-3 col-md-3">
			<div class="dt-sidebar">
				<?php get_sidebar(); ?>
			</div><!-- .dt-sidebar -->
		</aside><!-- .col-lg-3 -->
	</div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
