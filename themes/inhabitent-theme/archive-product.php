<?php
/**
 * The template for displaying archive pages.
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	
	<h2 class="front-titles">Shop Stuff</h2>
		
		<?php 
		$category_arr = array('taxonomy' => 'product-type', 'hide_empty' => true);

		$shop_category = get_terms( $category_arr );?>
		
		<div class="shop-header-links">
		<?php 
		foreach ( $shop_category as $term ): ?> 
			<a href="<?php echo get_term_link($term) ?>">
			<?php echo $term->name ;?></a>
		<?php endforeach;?>
		</div>

	<main id="main" class="site-main" role="main">

		<div class="shop-archive-product">

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
