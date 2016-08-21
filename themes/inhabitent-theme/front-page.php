<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="hero-image">
			<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'?>">
		</section>

		
		<h2 class="front-titles">Shop Stuff</h2>

		<section class="shop-container">

			<?php 
			$category_arr = array('taxonomy' => 'product-type', 'hide_empty' => true);

			$shop_category = get_terms( $category_arr );?>

			<?php 

			foreach ( $shop_category as $term ): ?> 
			<div class="shop-content">
				<img src=" <?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';?>" alt="" />
				<p><?php echo $term->description; ?></p>
				<div class="shop-button">
					<a href="<?php echo get_term_link($term) ?>">
						<?php echo $term->name . ' stuff';?></a>
					</div>
				</div>
			<?php endforeach;?>
		</section>

		<h2 class="front-titles">inhabitent journal</h2>

		<section class="front-journal-container">
			<?php
			$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );

			$blog_posts = get_posts( $args ); // returns an array of posts
			?>

			<?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
				
				<div class="front-journal-content">
					<div class="front-journal-image">
						<?php the_post_thumbnail(); ?>
					</div>

					<div class="front-journal-text">
						<div class="front-journal-date">
						<?php red_starter_posted_on(); ?> / 
					<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
						</div>
					<h3>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>

					<a class="read-entry" href="<?php the_permalink(); ?>">read entry</a>
					
					</div>
				</div>

			<?php endforeach; wp_reset_postdata();?>

		</section>


			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_footer(); ?>
