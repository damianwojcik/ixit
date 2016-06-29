<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

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

		<div class="container">

			<div class="row-tight">

				<article class="article-wrap span8">

					<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<div class="breadcrumbs-wrap">','</div>');
						}
					?>

					
					<h1>Strony nie znaleziono</h3>

						<p>
							Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie została odnaleziona. Sprawdź adres URL czy nie zawiera błędów lub wróć na <a href="<?= SITE_URL; ?>" style="color: #3A5FB4; text-decoration: underline;">strone główną</a>.
						</p>

					<a href="#" class="circle-btn circle-btn--left"><span>⟨</span></a>

					<h2>Zobacz również</h2>

					<nav class="boxed-buttons">

						<ul>
							<li><a href="#" style="background-image: url('assets/img/button-realizations.jpg')">Realizacje</a></li>
							<li><a href="#" style="background-image: url('assets/img/button-contact.jpg')">Kontakt</a></li>
						</ul>

					</nav>

				</article>
				<!-- END article-wrap -->

				<aside class="sidebar span4">

					<div class="row-tight">

						<a href="#" class="featured-box featured-box--large" style="background-image: url('assets/img/service.jpg')">

							<div class="bordered-wrap">

								<div class="wrap">

									<h2 style="color: #FFF;font-size:3.8em;font-weight:bold;">Bricks System</h2>

									<span style="display:block;color: #FFF;font-size:1.4em;font-family:'PT Serif', serif;font-style:italic;margin-bottom:20px;">Poznaj innowacyjny produkt</span>

								</div>
								<!-- END wrap -->

								<div class="btn btn-arrow-right">Sprawdź szczegóły <span>⟩</span></div>

							</div>
							<!-- END inner-wrap -->
						
						</a>
						<!-- END featured-box -->

					</div>
					<!-- END row-tight -->
					
					<div class="row-tight">

						<a href="#" class="featured-box" style="background-image: url('assets/img/map.jpg')">

							<div class="wrap">
							
								<h2 style="color: #FFF">Kontakt</h2>

								<h3>Sprawdź <br> jak dojechać</h3>

							</div>
							<!-- END wrap -->

							<div class="circle-btn circle-btn--right"><span>⟩</span></div>

						</a>
						<!-- END featured-box -->

					</div>
					<!-- END row-tight -->

				</aside>
				<!-- END sidebar -->

			</div>

		</div>
		<!-- END container -->

	</section>
	<!-- END section content -->
	
</main>
<!-- END site-main -->


<?php get_footer(); ?>
