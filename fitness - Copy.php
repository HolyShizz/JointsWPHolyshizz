<?php
/*
Template Name: FitnessTest
*/

get_header(); ?>

<div class="content">

	<div class="inner-content ">

		<main class="main small-12 medium-12 large-12 cell" role="main">
			

			<div class="block-swiper">

				<div class="course-select">

					<div class="grid-x grid-padding-x show-for-medium">
						<div class="cell large-8">
							<h3>
								<?php 
								echo ot_get_option('coursec_title');
								?>
							</h3>
							
								<?php 
								echo '<div class="expanded button-group">';
								$upper_tabs = ot_get_option('upper_tabs_nav_and_content', array());
								if (!empty ($upper_tabs) ) {

								foreach ($upper_tabs as $upper_tab_single) {

									echo '<button type="button" class="coursec-nav button secondary"><a href="'.$upper_tab_single['coursec_tabs_foundation_1st_section'].'"> '.$upper_tab_single['title'].' </a></button>';

								}
							}
							echo '</div>';
							?>
							

							<div class="grid-container full">

								<h3>
									<?php 
								echo ot_get_option('coursec_step_2_title');
								?>
								</h3>


								<div id="coursec-btn-middle" class="grid-x small-up-3 grid-margin-x large-up-4">
									
										<?php 

								$coursec_step_2_card_int = ot_get_option('coursec_step_2_card', array());

								if (!empty ($coursec_step_2_card_int) ) {

								foreach ($coursec_step_2_card_int as $coursec_step_2_card_single) {

									echo '
											<div class="cell">
												
												<button type="button" class="button secondary card-height"><h6>'.$coursec_step_2_card_single['title'].'</h6>
													
												<a>'.$coursec_step_2_card_single['coursec_step_2_card_purpose'].'</a>
												</button>
											
											</div>
										';
								}
							}
							?>
									
								</div>
								<h3>
									<?php 
									echo ot_get_option('coursec_step_3_title');
									?>
								</h3>
								
							</div>

						</div>


						<div class="cell large-3 ">

							<div class="tabs-content" data-tabs-content="upper-tabs">
								<div class="top-tab-content">
									<?php 
							
							$upper_tabs = ot_get_option('upper_tabs_nav_and_content', array());
							if (!empty ($upper_tabs) ) {

								foreach ($upper_tabs as $upper_tab_single) {

								echo '<div class="tabs-panel upper-tabs" id="'.$upper_tab_single['coursec_tabs_foundation_1st_section'] = substr($upper_tab_single['coursec_tabs_foundation_1st_section'], 1).'">
									 <h4 class="upper-tab-title" style="color:#fe609f">'.$upper_tab_single['title'].' </h4>
									 <p class="upper-tab-content">'.$upper_tab_single['tabs_foundation_title_append'].'</p>
									 <hr>
									 <h4 class="upper-tab-title" style="color:#fe609f">'.$upper_tab_single['tab_foundation_content_title'].' </h4>
									 <p class="upper-tab-content">'.$upper_tab_single['tab_foundation_content'].'</p>
									 <hr>
									 </div>';
								}
							}
							
						?>
								</div>

								<div class="bot-tab-content">
									<div class="tabs-content" data-tabs-content="coursec-card-1-4">
										<?php 

							$coursec_step_2_card_int = ot_get_option('coursec_step_2_card', array());

							if (!empty ($coursec_step_2_card_int) ) {

							foreach ($coursec_step_2_card_int as $coursec_step_2_card_single) {

								echo '
								<div class="tabs-panel upper-tabs" id="'.$coursec_step_2_card_single['coursec_tabs_foundation_2nd_section'] = substr($coursec_step_2_card_single['coursec_tabs_foundation_2nd_section'], 1).'">
									<h4 style="color:#fe609f">'.$coursec_step_2_card_single['coursec_step_2_card_price_title'].'</h4>
									<h3 style="color:#fe609f">'.$coursec_step_2_card_single['coursec_step_2_card_price_number'].'</h3>
								</div>	
									';
							}
						}
						?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<html>



  
  <div class="fifty">
    <div id="myBtnContainer">
      <button class="btn-top active" onclick="filterSelection('cheeks')">  Красивые ягодицы </button>
      <button class="btn-top" onclick="filterSelection('excerptFirst','press')">  Идеальный пресс</button>
      <button class="btn-top" onclick="filterSelection('excerptFirst','torse')">  Рельефное тело </button>

    </div>

    <div class="container" id="btnMiddleContainer">
      <button onclick="filterSelectionSide('first')" class="filterDiv cheeks btn-middle"><a>Курс с фитнес-резинками</a></button>
      <button onclick="filterSelectionSide('second')" class="filterDiv excerptFirst btn-middle"><a>Базовый</a></button>
      <button onclick="filterSelectionSide('third')" class="filterDiv excerptFirst btn-middle"><a>Продвинутый</a></button>
      <button onclick="filterSelectionSide('fourth')" class="filterDiv excerptFirst btn-middle"><a>Интенсивный</a></button>
    </div>
<button class="active1"></button>
  </div>

  <div class="thirty">
    <div class="container">
      <div class="filterDiv1 first"><a>111111</a></div>
      <div class="filterDiv1 second"><a>2222222222</a></div>
      <div class="filterDiv1 third"><a>К333333333333</a></div>
      <div class="filterDiv1 fourth"><a>4444444444</a></div>
    </div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>