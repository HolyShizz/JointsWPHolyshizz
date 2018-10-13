<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta class="foundation-mq">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
	<!-- Icons & Favicons -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
	<?php } ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="off-canvas-wrapper">

		<!-- Load off-canvas container. Feel free to remove if not using. -->
		<?php get_template_part( 'parts/content', 'offcanvas' ); ?>



		<header class="header" role="banner">

			<div class="header-container" style="background-image: url(<?php echo ot_get_option('header_banner') ?>)">

				<div data-sticky-container>
					<div data-sticky style="width:100%" data-margin-top="0" data-stick-to="top">
						<?php get_template_part( 'parts/nav', 'sticky' ); ?>
					</div>
				</div>
				<div class="off-canvas-content show-for-small-only" data-off-canvas-content>
					<?php get_template_part( 'parts/nav', 'offcanvas' ); ?>
				</div>


				<div class="grid-container">
					<div class="media-object align-right">

						<div class="header-banner">
							<?php echo ot_get_option('header_paragraph'); ?>
						</div>
					</div>
				</div>

		</header> <!-- end .header -->