<?php

	$page_contact = get_permalink( get_page_by_title( 'Kontakt' ) );
	$page_bricks_system = get_permalink( get_page_by_title( 'Bricks System' ) );

?>

<aside class="sidebar span4">

	<div class="row-tight">

		<a href="<?php echo $page_bricks_system; ?>" class="featured-box featured-box--large" style="background-image: url('<?= THEME_URL; ?>/assets/img/service.jpg')">

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
	<!-- END row-tight -->

</aside>
<!-- END sidebar -->