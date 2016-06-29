<?php 

	/* Template Name: Strona galeria */

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

		<div class="gallery-wrapper">

			<ul class="gallery">

				<div class="grid-sizer"></div>

				<li>
					<a href="#">
						<img src="assets/img/gallery/1.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/2.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/3.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/4.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/5.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/6.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/7.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/8.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/9.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/10.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/11.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/12.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/13.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/14.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/15.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/16.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/17.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/18.jpg" alt="#">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/gallery/19.jpg" alt="#">
					</a>
				</li>

			</ul>

		</div>
		<!-- END gallery-wrapper -->

		<div class="container button-container">

			<a href="#" class="three-dots">
				<span>...</span>
			</a>

		</div>

	</section>
	<!-- END section content -->

</main>
<!-- END site-main -->


<?php get_footer(); ?>
