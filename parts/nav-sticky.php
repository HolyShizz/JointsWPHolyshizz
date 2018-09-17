<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div data-sticky-container>
	<div data-sticky style="width:100%" data-margin-top="0" data-stick-to="top">
		<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="title-bar-title">
				<?php _e( 'Menu', 'jointswp' ); ?>
			</div>
		</div>

		

		<nav class="hover-underline-menu" data-menu-underline-from-center >
		<?php fitness_top_nav(); ?>
		</nav>
	</div>
</div>