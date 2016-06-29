<?php
	$images = get_field('gallery');
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
		Section Content
	================================================== -->
	<section class="content">

	<?php if( $images ): ?>

		<div class="gallery-wrapper">

			<ul class="gallery">

				<div class="grid-sizer"></div>

				<?php foreach( $images as $image ): ?>

		            <li>
		                <a href="<?php echo $image['url']; ?>" rel="lightbox[gallery]">
		                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
		                </a>
		            </li>

	        	<?php endforeach; ?>

			</ul>

		</div>
		<!-- END gallery-wrapper -->

		<div class="container button-container">

			<a href="#" class="three-dots">
				<span>...</span>
			</a>

		</div>
		<!-- END button-container -->

	<?php endif; ?>

	</section>
	<!-- END section content -->
	
</main>
<!-- END site-main -->


<?php get_footer(); ?>
