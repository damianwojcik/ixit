<?php 

	/* Template Name: Strona główna */

?>

<?php get_header(); ?>


<!-- =================================================
	Site Main
================================================== -->
<main class="site-main" style="background-image: url('<?= THEME_URL; ?>/assets/img/main-bg.jpg');">
	
	
	<!-- =================================================
		Section Title
	================================================== -->
	<?php get_template_part("partials/section", "title"); ?>


	<!-- =================================================
		Section Featured
	================================================== -->
	<?php get_template_part("partials/section", "featured"); ?>
	


</main>
<!-- END site-main -->


<?php get_footer(); ?>
