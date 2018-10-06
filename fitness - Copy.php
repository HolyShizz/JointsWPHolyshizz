<?php
/*
Template Name: FitnessTest
*/

get_header(); ?>

<div class="content">

	<div class="inner-content ">

		<main class="main small-12 medium-12 large-12 cell" role="main">

			<div class="grid-x grid-margin-x">
				<div class="cell large-8">
					<div id="myBtnContainer">
						<?php 

							$upper_tabs = ot_get_option('upper_tabs_nav_and_content', array());
							if (!empty ($upper_tabs) ) {

							foreach ($upper_tabs as $upper_tab_single) {
								echo '<button class="btn-top" onclick="filterSelection('.$upper_tab_single['jsfiltration_1st_section'].')">
									'.$upper_tab_single['title'].'
								</button>';
							}
						}
							?>
					</div>

					<div class="container" id="btnMiddleContainer">
						
						<?php 
							
							$middle_tabs = ot_get_option('coursec_step_2_card', array());
							if (!empty ($middle_tabs) ) {

							foreach ($middle_tabs as $middle_tab_single) {
								echo '<button class="btn-middle '.$middle_tab_single['jsfiltration_2nd_section'].' filterDiv" onclick="filterSelectionSide('.$middle_tab_single['js_buttondata_2nd_section'].')">
								'.$middle_tab_single['title'].'
								</button>';
							}
						}
							?>
						<button onclick="filterSelectionSide('first')" class="filterDiv common btn-middle"><a>Курс с фитнес-резинками</a></button>
						<button onclick="filterSelectionSide('second')" class="filterDiv excerptFirst btn-middle"><a>Базовый</a></button>
						<button onclick="filterSelectionSide('third')" class="filterDiv excerptFirst btn-middle"><a>Продвинутый</a></button>
						<button onclick="filterSelectionSide('fourth')" class="filterDiv excerptFirst btn-middle"><a>Интенсивный</a></button>
					</div>
				</div>
			</div>
			<div class="cell large-3">
				<div class="container">
					<div class="filterDiv1 first"><a>111111</a></div>
					<div class="filterDiv1 second"><a>2222222222</a></div>
					<div class="filterDiv1 third"><a>К333333333333</a></div>
					<div class="filterDiv1 fourth"><a>4444444444</a></div>
				</div>
			</div>

	</div><!-- end grid foundation-->
	</main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>