<?php
/**
 * The template for displaying archive pages.
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>
</div>
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

	<main id="main" class="archive-main" role="main">

		<div class="shop-archive-product">

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
