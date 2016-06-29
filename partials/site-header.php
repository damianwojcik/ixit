<?php

	$logo = get_field('site_logo', 'option');

?>

<header class="site-header">

	<div class="container">

		<div class="row">

			<h1 class="site-logo">

				<a href="<?= SITE_URL; ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">FOURtechmix</a>

			</h1>


			<div id="lang_sel_click">

				<ul>
					<li>

						<a href="#" class="lang_sel_sel"><img src="<?= THEME_URL; ?>/assets/img/flag.png" alt="Flag"><span class="chevron-down">▾</span></a>

						<ul style="display: none">
							<li class="icl-en">
								<a href="#" class="lang_sel_sel">
									<img src="assets/img/flag.png" alt="Flag">
								</a>
							</li>
						</ul>

					</li>
				</ul>

			</div>
			<!-- END lang selection -->

			<?php 

				$args = array(
					'container'       => 'nav',
					'container_class' => 'primary-menu',
					'menu_class'      => ''
				);

				wp_nav_menu($args);

			?>

			<a href="#" class="mobile-nav-toggle">
				<div class="menu-bars">
					<span class="menu-bar"></span>
					<span class="menu-bar"></span>
					<span class="menu-bar"></span>
				</div>
			</a>
			<!-- END mobile-nav-toggle -->

		</div>

	</div>

</header>
<!-- END site-header -->