<?php
/**
 * Sidebar
 *
 * Content for our sidebar, provides prompt for logged in users to create widgets
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!-- Sidebar -->
<aside class="large-3 columns sidebar hide-for-small">
	<div class="row socialicons">
		<div class="large-6 columns socialicon1">
			<a href="https://www.facebook.com/groups/135987799795381/" title="Facebook">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/icon-fb.png'; ?>" alt="Facebook Group">
			</a>
		</div>
		<div class="large-6 columns socialicon2">
			<a href="https://www.twitter.com/societeludique" title="Twitter">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/icon-tw.png'; ?>" alt="Twitter">
			</a>
		</div>
	</div>
	<div class="row socialicons">
		<!-- <div class="large-12 columns"> -->
			<a href="http://mrgs.ca/forum" title="Forums">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/icon-forums.png'; ?>" alt="Forums">
			</a>
		<!-- </div> -->
	</div>
	<div class="row socialicons">
		<!-- <div class="large-12 columns"> -->
			<a href="http://mrgs.ca/arcaderoyale" title="Arcade Royale">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/icon-arcade.png'; ?>" alt="Arcade Royale">
			</a>
		<!-- </div> -->
	</div>
	<div class="row socialicons">
		<div class="large-6 columns socialicon1">
			<a href="#" title="Flickr">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/icon-flickr.png'; ?>" alt="Flickr">
			</a>
		</div>
		<div class="large-6 columns socialicon2">
			<a href="http://vimeo.com/societeludique" title="Vimeo">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/icon-vimeo.png'; ?>" alt="Vimeo">
			</a>
		</div>
	</div>

	<?php dynamic_sidebar('Sidebar Right'); ?>
</aside>
<!-- End Sidebar -->