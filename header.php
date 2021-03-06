<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title>MRGS / SLMR</title>

<!-- Load jquery and lettering in the head to avoid FOUT -->
<?php wp_head(); ?>

<?php /*
<!-- Lettering for header -->
<script>
  $(document).ready(function() {
	$("#header-title").lettering();
  });
</script>
<script>
  jQuery(".headertext").fitText();
</script>
*/ ?>
</head>

<body <?php body_class(); ?>>
	<nav class="top-bar show-for-small">
		<ul class="title-area">
			<li class="name"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="MRGS/SLMR" rel="home">MRGS/SLMR</a></h1></li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<section class="top-bar-section">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'left', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
		</section>
	</nav>

	<header class="site-header">
		<div class="row show-for-small">
			<div class="small-4 small-centered columns">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/mergsey.png'; ?>" alt="MRGS/SLMR">
				</a>
			</div>
		</div>
		<div class="row hide-for-small">
			<div class="large-8 columns">
				<?php /*
				<a style="color:#<?php header_textcolor(); ?>;" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1 class="right" id="header-title"><?php bloginfo( 'name' ); ?></h1></a>
				*/ ?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<h1 class="text-right headertext" id="headerline1">MRGS</h1>
					<h1 class="text-right headertext" id="headerline2">SLMR</h1>
				</a>
			</div>
			<!-- large-offset-1 omitted. -->
			<div class="large-3 columns headerimg">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/mergsey.png'; ?>" alt="MRGS/SLMR">
				</a>
			</div>
		</div>
	</header>

<!-- Begin Page -->
<div class="row">