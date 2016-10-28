<?php
/**
 * The main template file.
 * @package metro-creativex
 */
get_header(); ?>
		</div><!--/topside-->
		<?php
			do_action('metro_customizr_show_title');
		?>
		
		<div id="content" >
			<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php metro_creativex_pagination(); ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div><!-- /content -->
		<?php do_action('metro_customizr_right_sidebar');?>
<?php get_footer(); ?>