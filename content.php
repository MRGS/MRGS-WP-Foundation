<?php
/**
 * Content
 *
 * Displays content shown in the 'index.php' loop, default for 'standard' post format
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<hgroup>
			<h6 class="text-right datestamp"><?php the_time(get_option('date_format')); ?></h6>
			<h2 class="text-right posttitle"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php if ( is_sticky() ) : ?><span class="right radius secondary label"><?php _e( 'Sticky', 'foundation' ); ?></span><?php endif; ?>
		</hgroup>
	</header>

	<?php if ( has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>

	<?php the_content(); ?>
	
	<div class="row"></div>
	<hr>

</article>