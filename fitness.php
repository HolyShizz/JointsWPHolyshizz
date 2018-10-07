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
								<div class="cell large-6 medium-12 align-self-middle">
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
			<div class="advantages" id="advantages" data-magellan-target="advantages">
				<div class="grid-container">
					<div class="advantages-title">
						<h4>
							<?php
						echo ot_get_option('title_advantages');
						?>
						</h4>
					</div>
					<div class="grid-x align-justify grid-margin-x">

						<?php 
							$advantages_item = ot_get_option('card_advantages_1_3', array() );
		
								if ( !empty ($advantages_item)) {
								
								foreach ($advantages_item as $advantages_item_single) {
									echo  '<div class="cell large-3 medium-8 small-12">
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

			<div class="testimonials grid-container" id="testimonials" data-magellan-target="testimonials">
				<?php 
									echo '<div class="row">
										<div class="columns">
												<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
										<ul class="orbit-container">';
									$testimonials = ot_get_option('testimonials_slider', array());
									if (!empty ($testimonials) ) {
		
										foreach ($testimonials as $testimonials_single) {
		
										echo '	<li class="orbit-slide">
												<div class="testimonial-container">
												<div class="testimonial-avatar"><img src="'.$testimonials_single['avatar'].'" alt=""></div>
												<div class="testimonial-short-text"><p>'.$testimonials_single['short_text'].'</p><a data-open="'.$testimonials_single['reveal_id'].'">Полный отзыв</a></div>
												<p></p>
												</div>
												
												  
												
												  <div class="reveal large" id="'.$testimonials_single['reveal_id'].'" data-reveal>
													  <img src="'.$testimonials_single['testimonial_full'].'" alt="">
													  <button class="close-button" data-close aria-label="Close modal" type="button">
															<span aria-hidden="true">&times;</span>
													  </button>
												  </div>
												
												</li>	';
										}
									}
									echo '</ul>
										</div>
									</div>
								</div>';
								?>

								<?php 
									echo '<div class="results">
											<div class="row">
												<div class="columns">
													<div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
														<ul class="orbit-container">';
										$results = ot_get_option('result_slider', array());
										if (!empty ($testimonials) ) {
		
										foreach ($results as $result_single) {
		
										echo '	<li class="orbit-slide">
												<img class="orbit-image" src="'.$result_single['result_photo'].'" alt="">
												
												</li>	';
										}

									}
												echo '</ul>
													</div>
												</div>
											</div>
										</div>';
								?>
			</div>
			<div class="parallax" style="background-image:url(<?php echo ot_get_option('parallax_images_3')?>);">

			</div>

			<div class="FAQ block-swiper" id="FAQ" data-magellan-target="FAQ">
				<div class="grid-container fluid ">
					<h3>FAQ</h3>
					<?php 
							echo '<div class="row">
								<div class="columns"></div>
								<ul class="accordion" data-accordion data-allow-all-closed="true" data-multi-expand="true">';
							$faq_accordion = ot_get_option('faq_list', array());
							if (!empty ($faq_accordion) ) {

								foreach ($faq_accordion as $faq_accordion_single) {

								echo '	<li class="accordion-item" data-accordion-item>
										<a href="#" class="accordion-title">'.$faq_accordion_single['question'].'</a>
										<div class="accordion-content" data-tab-content >
										  <p>'.$faq_accordion_single['answer'].'</p>
										</div>
										</li>	';
								}
							}
							echo '</ul>
								</div>
							</div>';
						?>
				</div>
			</div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>