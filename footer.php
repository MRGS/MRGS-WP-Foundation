<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

</div>
<!-- End Page -->

<!-- Footer -->
<footer class="row">

<?php
	dynamic_sidebar('Sidebar Footer One');
	dynamic_sidebar('Sidebar Footer Two');
	dynamic_sidebar('Sidebar Footer Three');
?>
	<div class="large-3 columns"></div>
</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>