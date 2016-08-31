<?php
/**
 * The template for displaying archive pages.
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
		
	<header class="category-header">
        <h1 class="front-titles">
        	<?php single_term_title();?>
        </h1>
        
        <p><?php the_archive_description();
        ?> </p>
    </header>

	<main id="main" class="site-main" role="main">

		<div class="category-archive-product">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="shop-grid-item">

						<a href="<?php echo get_permalink(); ?> ">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
						</a>
						<div class="shop-grid-text">						
						<div class="shop-grid-name"><?php the_title() ?> </div>
						<div class="shop-grid-price"><?php echo CFS()->get('product_price') ?>
						</div>
						</div>
					</header><!-- .entry-header -->

				</article><!-- #post-## -->


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
