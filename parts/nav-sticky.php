<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div data-sticky-container class="show-for-medium">
	<div data-sticky style="width:100%" data-margin-top="0" data-stick-to="top">
		<nav class="hover-underline-menu" id="top-bar-menu" data-menu-underline-from-center data-show-for="<?php echo $breakpoint ?>">
			<?php fitness_top_nav(); ?>

		</nav>
	</div>
</div>

	
<div class="top-bar show-for-small-only">

	<ul class="menu ">
		<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
	</ul>
</div>
</div>