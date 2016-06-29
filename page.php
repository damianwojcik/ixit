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

					<h1><?php the_title(); ?></h1>

					<img src="<?= THEME_URL; ?>/assets/img/headline.jpg" alt="Article Headline">

					<?php if( is_page( 'Kontakt' ) ) { ?>

						<?php 
							if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }
						?>

					<?php } else { ?>

						<p>
							<?php the_content(); ?>
						</p>

					<?php } ?>

					<a href="#" class="circle-btn circle-btn--left"><span>⟨</span></a>

					<!-- article footer -->
					<?php get_template_part("partials/article", "footer"); ?>


				</article>
				<!-- END article-wrap -->


				<!-- =================================================
					Aside sidebar
				================================================== -->
				<?php get_template_part("partials/aside", "sidebar"); ?>


			</div>

		</div>
		<!-- END container -->

	</section>
	<!-- END section content -->
	
</main>
<!-- END site-main -->


<?php get_footer(); ?>
