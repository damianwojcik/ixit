<section class="title">

	<div class="wrap">

		<?php if ( is_front_page() ) { ?>

			<?php
				$title = get_field('title');
				$sub_title = get_field('sub-title');
			?>


			<h1><?php echo $title; ?></h1>

			<div class="farb-wrap">

				<h2><?php echo $sub_title; ?></h2>

			</div>
			<!-- END farb-wrap -->

		<?php } elseif ( is_category() ){ ?>

			<h1><?php single_cat_title(); ?></h1>

		<?php } else { ?>

			<h1><?php the_title(); ?></h1>

		<?php } ?>

	</div>
	<!-- END wrap -->

</section>
<!-- END section title -->