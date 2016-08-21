<?php
/**
 * Template part for displaying page content in page.php.
 * Template name: About Page

 * @package RED_Starter_Theme
 */

get_header(); ?>

<article>

	<div class="test">
		<h1>
	</div>
		
	<div class="entry-content">
		<?php the_content(); ?>
		
		<?php echo CFS()->get( 'our_story' ); ?>
		<?php echo CFS()->get( 'our_team' ); ?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->

<?php get_footer(); ?>