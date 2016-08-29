<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="single-product-content">
					<div class="single-product-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</div>
					<div class="product-information-container">
						<div class="single-product-title">
							<?php the_title( '<h1>', '</h1>' ); ?>
						</div>
						<div class="single-product-price">
							<?php echo CFS()->get( 'product_price' ); ?> 
						</div>
						<div class="single-product-description">
							<?php the_content(); ?>
						</div>
						<div class="single-product-media">
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

					</div>
				</div>

				

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
