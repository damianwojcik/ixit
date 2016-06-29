<?php

	$link_facebook = get_field('link_facebook', 'option');
	$link_gplus = get_field('link_gplus', 'option');
	$name = get_field('name', 'option');
	$address = get_field('address', 'option');
	$nip = get_field('nip', 'option');
	$regon = get_field('regon', 'option');
	$phone = get_field('phone', 'option');


?>

<footer class="site-footer">

	<div class="container">

		<div class="row-tight">

			<div class="span6 span-left">

				<h2>Fourtechmix</h2>

				<ul>
					<li>
					<p><strong><?php echo $name; ?></strong></p></li>
					<li><p>NIP: <?php echo $nip; ?></p></li>
					<li><p>REGON: <?php echo $regon; ?></p></li>
					<li><p><?php echo $address; ?></p></li>
					<li><p>Tel: <a href="callto:+48<?php echo $phone; ?>"><?php echo $phone; ?></a></p></li>
				</ul>

			</div>
			<!-- END span6 -->

			<div class="span4 span-middle">

				<h2>Menu</h2>

				<?php 

					$args = array(
						'container'       => 'nav',
						'container_class' => 'footer-menu',
						'menu_class'      => ''
					);

					wp_nav_menu($args);

				?>
				
			</div>
			<!-- END span4 -->

			<div class="span2 span-right">
				
				<h2>Social media</h2>

				<ul class="social-media">

					<li><a href="<?php echo $link_facebook; ?>" target="_blank"><img src="<?= THEME_URL; ?>/assets/img/facebook-icon.png" alt="Social Icon"></a></li>
					<li><a href="<?php echo $link_gplus; ?>" target="_blank"><img src="<?= THEME_URL; ?>/assets/img/gplus-icon.png" alt="Social Icon"></a></li>

				</ul>

				<p class="copyright">
					<?= current_time('Y'); ?> &copy; <a href="http://studionext.pl/" target="_blank" title="Studio Next">StudioNext.pl</a>	
				</p>

			</div>
			<!-- END span2 -->

		</div>

	</div>

</footer>
<!-- END site-footer -->