<?php
/*
Template Name: Fitness
*/

get_header(); ?>

<div class="content">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<main class="main small-12 medium-12 large-12 cell" role="main">

			<div class="media-object">
				<div class="media-object-section main-section">
				<div class="header-banner" style="background-image: url(<?php echo ot_get_option('header_banner'); ?>);">	
				<?php echo ot_get_option('header_paragraph'); ?>
				</div>
				</div>
				
			</div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>