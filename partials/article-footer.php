<?php

   	$realizations_id = get_cat_ID( 'Realizacje' );
    $page_realizations = get_category_link( $realizations_id );

	$page_contact = get_permalink( get_page_by_title( 'Kontakt' ) );

?>

<div class="article-footer">

	<h2>Zobacz również</h2>

	<nav class="boxed-buttons">

		<ul>
			<li><a href="<?php echo $page_realizations; ?>" style="background-image: url('<?= THEME_URL; ?>/assets/img/button-realizations.jpg')">Realizacje</a></li>
			<li><a href="<?php echo $page_contact; ?>" style="background-image: url('<?= THEME_URL; ?>/assets/img/button-contact.jpg')">Kontakt</a></li>
		</ul>

	</nav>

</div>