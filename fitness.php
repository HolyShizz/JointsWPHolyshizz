<?php
/*
Template Name: Fitness
*/

get_header(); ?>

<div class="content">

	<div class="inner-content ">

		<main class="main small-12 medium-12 large-12 cell" role="main">
			<div class="block-quote">
				<div class="grid-container fluid">
					<div class="grid-x align-center">
						<div class="cell small-2 medium-2 large-1"><img src="<?php echo ot_get_option('image_inside_block_quote'); ?>"
							 alt=""></div>
						<div class="cell small-10 medium-8 large-4">
							<?php echo ot_get_option('text_inside_block_quote'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="block-swiper container-fluid">
				<div class="orbit" role="region" aria-label="Fitness-slider" data-orbit>
					<?php 
					$swiper_item = ot_get_option('swiper', array() );

						if (!empty ($swiper_item)) {
						echo  '<ul class="orbit-container">';
						foreach($swiper_item as $swiper_item_single) {
						echo '<li class="orbit-slide">	
						
						<div class="content-inside-slider" style="background-image: url('.$swiper_item_single['swiper_image'].')" >
						<div class="grid-container full">
							<div class="grid-x align-right" style="height: 100%;">
								<div class="cell large-6 align-self-middle">
									<div class="text-content-inside-slider"><h3>'.$swiper_item_single['title'].' </h3><p>'.$swiper_item_single['text_inside_swiper'].'</p></div>
									</div>
								</div>
							</div>
						</div>
						</li>';
						}
						echo '</ul>';
					}

				?>
				</div>
			</div>
			<div class="advantages">
				<div class="grid-container">
					<div class="advantages-title">
						<h4>
							<?php
						echo ot_get_option('title_advantages');
						?>
						</h4>
					</div>
					<div class="grid-x align-justify padding-x">

						<?php 
							$advantages_item = ot_get_option('card_advantages_1_3', array() );
		
								if ( !empty ($advantages_item)) {
								
								foreach ($advantages_item as $advantages_item_single) {
									echo  '<div class="cell large-3 medium-4 small-12">
										<h1>'.$advantages_item_single['card_advantages_1_3_item_number'].'</h1>
										<h4>'.$advantages_item_single['title'].'</h4>
										<p>'.$advantages_item_single['card_advantages_item_1_3_paragraph'].'</p>
									</div>';
								}
								
							}
						?>
					</div>
				</div>
			</div>
			<div class="block-swiper">
				<div class="grid-container fluid">
					<div class="grid-x align-justify align-middle">

						<div class="cell small-12 medium-12 large-6">
							<div class="orbit" role="region" aria-label="Personal-cabinet-examples" data-orbit>
								<?php 
									$personal_cabinet_slider = ot_get_option('personal_cabinet_slider', array() );
									if (!empty ($personal_cabinet_slider)) {
									echo  '<ul class="orbit-container">';
									foreach($personal_cabinet_slider as $personal_cabinet_slider_item) {
									echo '<li class="orbit-slide">	
											<img src="'.$personal_cabinet_slider_item['personal_cabinet_slider_tab_image'].'">
									</li>';
									}
									echo '</ul> 
									<nav class="orbit-bullets">
  										<button class="is-active" data-slide="0"><p>Тренировки</p></button>
										<button data-slide="1"><p>Питание</p></button>
										<button data-slide="2"><p>Отчеты</p></button>
									</nav>
								  ';

								}

								?>
							</div>
						</div>

						<div class="cell small-12 medium-12 large-5">
							<div class="personal-cabinet-text">
								<?php 
								echo ot_get_option('personal_cabinet_title_with_paragraph');
								?>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="advantages">
				<div class="grid-container">
					<div class="advantages-title">
						<h4>
							<?php
						echo ot_get_option('title_advantages');
						?>
						</h4>
					</div>
					<div class="grid-x align-justify padding-x">

						<?php 
							$advantages_items = ot_get_option('card_advantages_4_6', array() );
		
								if ( !empty ($advantages_items)) {
								
								foreach ($advantages_items as $advantages_item_single) {
									echo  '<div class="cell large-3 medium-4 small-12">
										<h1>'.$advantages_item_single['card_advantages_4_6_number'].'</h1>
										<h4>'.$advantages_item_single['title'].'</h4>
										<p>'.$advantages_item_single['card_advantages_4_5_paragraph'].'</p>
									</div>';
								}
								
							}
						?>
					</div>
				</div>
			</div>
			<div class="parallax" style="background-image:url(<?php echo ot_get_option('parallax_images_1')?>);">

			</div>

			<div class="block-swiper">

				<div class="course-select">

					<div class="grid-x grid-padding-x show-for-medium">
						<div class="cell large-8">
							<h3>
								<?php 
								echo ot_get_option('coursec_title');
								?>
							</h3>
							<ul class="tabs menu-tabs" data-tabs="tabs" id="upper-tabs">
								<?php 
								$upper_tabs = ot_get_option('upper_tabs_nav_and_content', array());
								if (!empty ($upper_tabs) ) {

								foreach ($upper_tabs as $upper_tab_single) {

									echo '<li class="tabs-title"><a href="'.$upper_tab_single['tabs_foundation_id'].'"> '.$upper_tab_single['title'].' </a></li>';

								}
							}
							?>
							</ul>

							<div class="grid-container full">

								<h3>
									<?php 
								echo ot_get_option('coursec_step_2_title');
								?>
								</h3>


								<div class="grid-x small-up-3 grid-margin-x large-up-4">

									<?php 
								$coursec_card = ot_get_option('coursec_step_2_card', array());

								if (!empty ($coursec_card) ) {

								foreach ($coursec_card as $coursec_card_single) {

									echo '<div class="cell">
											<div class="card card-height">
												<div class="card-divider">
												<h6 style="color:#fe609f; height: 50px;">'.$coursec_card_single['title'].'</h6>
												</div>
												<div class="card-section">
												<p class="card-text">
												'.$coursec_card_single['coursec_step_2_card_purpose'].'
												</p>
												</div>
											</div>
										</div>';
								}
							}
							?>

								</div>

							</div>

						</div>


						<div class="cell large-3 ">
							<div class="tabs-content" data-tabs-content="upper-tabs">
								<?php 
							
							$upper_tabs = ot_get_option('upper_tabs_nav_and_content', array());
							if (!empty ($upper_tabs) ) {

								foreach ($upper_tabs as $upper_tab_single) {

								echo '<div class="tabs-panel upper-tabs" id="'.$upper_tab_single['tabs_foundation_id'] = substr($upper_tab_single['tabs_foundation_id'], 1).'">
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
						</div>
					</div>








					<div class="grid-x show-for-small hide-for-large hide-for-medium">
						<?php 
							echo '<div class="cell ">
								<ul class="tabs" data-responsive-accordion-tabs="accordion" id="upper-tabs-for-med">';
								$upper_tabs = ot_get_option('upper_tabs_nav_and_content', array());
								if (!empty ($upper_tabs) ) {

								foreach ($upper_tabs as $upper_tab_single) {

									echo '<li class="tabs-title"><a href="'.$upper_tab_single['tabs_foundation_id'].'1"> '.$upper_tab_single['title'].' </a></li>';

								}
							}
							echo 
							'</ul></div>';
							
						?>

						<?php 
							echo '<div class="cell">
								<div class="tabs-content" data-tabs-content="upper-tabs-for-med">';
							$upper_tabs = ot_get_option('upper_tabs_nav_and_content', array());
							if (!empty ($upper_tabs) ) {

								foreach ($upper_tabs as $upper_tab_single) {

								echo '<div class="tabs-panel upper-tabs-for-med" id="'.$upper_tab_single['tabs_foundation_id'] = substr($upper_tab_single['tabs_foundation_id'], 1).'1">
									 <h4 class="upper-tab-title">'.$upper_tab_single['title'].' </h4>
									 <p class="upper-tab-content">'.$upper_tab_single['tabs_foundation_content'].'</p>
									 </div>';
								}
							}
							echo '</div>
							</div>';
						?>
					</div>
				</div>
			</div>
		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>