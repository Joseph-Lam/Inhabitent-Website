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
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>

						<?php the_title( sprintf( '<h2 class="shop-product-header"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

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
