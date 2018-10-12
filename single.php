<?php
/**
 * The template for displaying all single posts.
 *
 * @package madhat
 */

get_header(); ?>

	<div id="primary-mono" class="content-area <?php echo esc_attr( apply_filters( 'madhat_primary-width', '' ) ); ?>">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'modules/content/content', 'single' ); ?>

			<?php //madhat_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
