<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area journal area">
	<main id="main" class="site-main journal-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="single-journal-media">
				<button>
					<i class="fa fa-facebook" aria-hidden="true"></i>like
				</button>
				<button>
					<i class="fa fa-twitter" aria-hidden="true"></i>tweet
				</button>
				<button>
					<i class="fa fa-pinterest" aria-hidden="true"></i>pin
				</button>
			</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; // End of the loop. ?>
		
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
