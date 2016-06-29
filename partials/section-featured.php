<?php

	$page_contact = get_permalink( get_page_by_title( 'Kontakt' ) );
	$page_bricks_system = get_permalink( get_page_by_title( 'Bricks System' ) );

	$args = array( 'numberposts' => '2', 'category' => '3' );
	$realization_posts = wp_get_recent_posts( $args );

	//temporary
	$realization_1_link = get_page_link( ($realization_posts[0]["ID"]) );
	$realization_2_link = get_page_link( ($realization_posts[1]["ID"]) );

?>

<section class="featured">

	<div class="container">

		<div class="grid-masonry">

			<div class="grid-sizer"></div>

			<div class="grid-item">

				<a href="<?php echo get_page_link(40); ?>" class="featured-box">

					<div class="wrap">

						<h2>Oferta</h2>

						<h3 style="color: #000;font-size:1.5em;font-weight:400;">Profesjonalne cięcie styropianu oraz styroduru</h3>

						<p>Format 3m x 1,3m x 1,3m. Kształtki, kliny, łuki, nowoczesne elewacje - wzory, dorabianie elementów według wzoru klienta.</p>

					</div>
					<!-- END wrap -->

					<div class="circle-btn circle-btn--right"><span>⟩</span></div>

				</a>
				<!-- END featured-box -->

			</div>
			<!-- END grid-item -->

			<div class="grid-item grid-item--width2">

				<a href="<?php echo get_page_link(42); ?>" class="featured-box featured-box--black"">

					<div class="wrap">

						<div class="text-wrap">
						
							<h2>Oferta</h2>

							<h3 style="font-weight: bold">Nowoczesne reklamy świetlne</h3>

							<p>Jesteśmy producentem reklamy począwszy od banerów, poprzez litery wykonane z styropianu, litery przestrzenne z licem z plexi podświetlane LED.</p>

						</div>
						<!-- END text-wrap -->

					</div>
					<!-- END wrap -->

					<div class="circle-btn circle-btn--right"><span>⟩</span></div>

					<img class="featured-box-img" src="<?= THEME_URL; ?>/assets/img/offer-1.jpg" alt="Offer">

				</a>
				<!-- END featured-box -->

			</div>
			<!-- END grid-item -->

			<div class="grid-item grid-item--height2">

				<a href="<?php echo $page_bricks_system; ?>" class="featured-box featured-box--large" style="background-image: url('<?= THEME_URL; ?>/assets/img/service.jpg')">

					<div class="bordered-wrap">

						<div class="wrap">

							<h2 style="color: #FFF;font-size:3.8em;font-weight:bold;">Bricks System</h2>

							<span style="display:block;color: #FFF;font-size:1.4em;font-family:'PT Serif', serif;font-style:italic;margin-bottom:20px;">Poznaj innowacyjny produkt</span>

							<p style="color: #FFF;">Bricks-System to rewolucyjne szablony tynkarskie doskonale imitujące klinkier.</p>

							<p style="color: #FFF;">Skontaktuj się z nami by skorzystać z letniej promocji uwzględniającej obniżkę cen na każdy model siatki!</p>

						</div>
						<!-- END wrap -->

						<div class="btn btn-arrow-right">Sprawdź szczegóły <span>⟩</span></div>

						<img id="bricks" src="<?= THEME_URL; ?>/assets/img/bricks.png" alt="Bricks">

					</div>
					<!-- END inner-wrap -->
				
				</a>
				<!-- END featured-box -->

			</div>
			<!-- END grid-item -->

			<div class="grid-item">

				<a href="<?php echo $realization_1_link; ?>" class="featured-box" style="background-image: url('<?= THEME_URL; ?>/assets/img/realization-2.jpg')">

					<div class="wrap">
					
						<h2 style="color: #e9e9e9">Realizacje</h2>

						<h3 style="font-family: 'PT Serif', serif;font-style: italic;text-transform:none;">
							Sztukateria, <br>
							Elewacje, <br>
							Wnętrza
						</h3>

					</div>
					<!-- END wrap -->

					<div class="circle-btn circle-btn--right"><span>⟩</span></div>

				</a>
				<!-- END featured-box -->

			</div>
			<!-- END grid-item -->

			<div class="grid-item">

				<a href="<?php echo $realization_2_link; ?>" class="featured-box" style="background-image: url('<?= THEME_URL; ?>/assets/img/realization-1.jpg')">

					<div class="wrap">
					
						<h2 style="color: #e9e9e9">Realizacje</h2>

						<h3 style="font-family: 'PT Serif', serif;font-style: italic;text-transform:none;">Reklama stylowa</h3>

					</div>
					<!-- END wrap -->

					<div class="circle-btn circle-btn--right"><span>⟩</span></div>

				</a>
				<!-- END featured-box -->

			</div>
			<!-- END grid-item -->

			<div class="grid-item">

				<div class="featured-box">

					<div class="wrap">
					
						<h2>Kontakt</h2>

						<h3 style="color: #000;font-weight: bold;font-size:1.8em;margin-bottom:30px">Szybki kontakt</h3>

						<p class="contact-intro" style="max-height: 40px;overflow:hidden;">Ut molestie a, ultricies porta urna vestibulum commodo volutpat.</p>

						<ul class="contact-details">
							<li>E-mail: <a href="mailto:4techmix@wp.pl">4techmix@wp.pl</a> </li>
							<li>Tel.: <a href="callto:+48600142600">+48 600 142 600</a> </li>
						</ul>

					</div>
					<!-- END wrap -->

					<a href="<?php echo $page_contact; ?>" class="circle-btn circle-btn--right"><span>⟩</span></a>

				</div>
				<!-- END featured-box -->

			</div>
			<!-- END grid-item -->

			<div class="grid-item">

				<a href="<?php echo $page_contact; ?>" class="featured-box" style="background-image: url('<?= THEME_URL; ?>/assets/img/map.jpg')">

					<div class="wrap">
					
						<h2 style="color: #FFF">Kontakt</h2>

						<h3>Sprawdź <br> jak dojechać</h3>

					</div>
					<!-- END wrap -->

					<div class="circle-btn circle-btn--right"><span>⟩</span></div>

				</a>
				<!-- END featured-box -->

			</div>
			<!-- END grid-item -->

			<div class="grid-item">

				<a href="#" class="featured-box" style="background-image: url('<?= THEME_URL; ?>/assets/img/facebook-bg.jpg')">
					
					<div class="wrap">

						<h2>Facebook</h2>

						<time>15 października 2015</time>

						<blockquote>
							„Ruszyliśmy z produkcją szablonów tynkarskich. Więcej info na naszej stronie!”
						</blockquote>

					</div>
					<!-- END wrap -->

					<div class="circle-btn circle-btn--right"><span>⟩</span></div>

				</a>
				<!-- END featured-box -->

			</div>
			<!-- END grid-item -->

		</div>
		<!-- END grid-masonry -->

	</div>
	<!-- END container -->

</section>
<!-- END section featured -->