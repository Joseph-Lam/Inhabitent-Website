<?php
/**
 * Template part for displaying page content in page.php.
 * Template name: About Page

 * @package RED_Starter_Theme
 */

get_header(); ?>

<article>

	<div class="about-hero">
		<h1 class="about-header">about</h1>
	</div>
	
	<div class="about-content">
		<?php the_content(); ?>
		<div class="about-text">
			<?php echo CFS()->get( 'our_story' ); ?>
			<?php echo CFS()->get( 'our_team' ); ?>
		</div>
	</div><!-- .entry-content -->


</article><!-- #post-## -->

<?php get_footer(); ?>