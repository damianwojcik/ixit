<?php

	$args = array( 'numberposts' => '6', 'category' => '3' );
	$recent_posts = wp_get_recent_posts( $args );

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

		<?php if( $recent_posts ) { ?>

		<ul class="large-tiles">

			<?php foreach ($recent_posts as $recent) { ?>

				<?php

					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent->ID ), 'large' );

				?>


				<li>

					<a href="<?php echo get_permalink($recent["ID"]); ?>" class="tile-large" style="background-image: url(<?= $featured_image[0]; ?>)">

						<div class="color-overlay">

							<div class="bordered-wrap">

								<div class="wrap">

									<h2><?php echo $recent["post_title"]; ?></h2>

									<div class="btn btn-arrow-right">Zobacz galerię <span>⟩</span></div>

								</div>
								<!-- END wrap -->

							</div>
							<!-- END bordered-wrap -->

						</div>
						<!-- END color-overlay -->

					</a>

				</li>

			<?php } ?>


		</ul>

		<?php } //end if ?>

	</section>
	<!-- END section content -->

</main>
<!-- END site-main -->


<?php get_footer(); ?>
