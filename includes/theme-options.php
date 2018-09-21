<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'header_main',
        'title'       => 'Header main page'
      ),
      array(
        'id'          => 'block_quote',
        'title'       => 'Block quote'
      ),
      array(
        'id'          => 'block_swiper',
        'title'       => 'Block swiper'
      ),
      array(
        'id'          => 'advantages',
        'title'       => 'Advantages'
      ),
      array(
        'id'          => 'personal_cabinet',
        'title'       => 'Personal cabinet'
      ),
      array(
        'id'          => 'parallax_backgrounds',
        'title'       => 'Parallax backgrounds'
      ),
      array(
        'id'          => 'courses',
        'title'       => 'Курсы оффер'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'header_logo',
        'label'       => 'Header logo',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header_main',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_banner',
        'label'       => 'Header banner',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header_main',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_paragraph',
        'label'       => 'Header paragraph',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'header_main',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'image_inside_block_quote',
        'label'       => 'Image inside block quote',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'block_quote',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'text_inside_block_quote',
        'label'       => 'Text inside block quote',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'block_quote',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'swiper',
        'label'       => 'Swiper',
        'desc'        => '1',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'block_swiper',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'swiper_image',
            'label'       => 'Image',
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'text_inside_swiper',
            'label'       => 'Text',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'title_advantages',
        'label'       => 'Title advantages',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'advantages',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'card_advantages_1_3',
        'label'       => 'Card advantages 1-3',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'advantages',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'card_advantages_1_3_item_number',
            'label'       => 'Сard adventages number',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'card_advantages_item_1_3_paragraph',
            'label'       => 'Card advantages item paragraph',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'card_advantages_4_6',
        'label'       => 'Card advantages 4-6',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'advantages',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'card_advantages_4_6_number',
            'label'       => 'card advantages 4 6 number',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'card_advantages_4_5_paragraph',
            'label'       => 'card advantages 4 5 paragraph',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'personal_cabinet_title_with_paragraph',
        'label'       => 'Personal cabinet title with paragraph',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'personal_cabinet',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'personal_cabinet_slider',
        'label'       => 'Personal cabinet slider',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'personal_cabinet',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'personal_cabinet_slider_tab_image',
            'label'       => 'Personal cabinet slider tab image',
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'parallax_images_1',
        'label'       => 'Parallax image 1',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'parallax_backgrounds',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'parallax_image_2',
        'label'       => 'Parallax image 2',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'parallax_backgrounds',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'step_1_title',
        'label'       => 'Шаг 1 Заголовок',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'parallax_backgrounds',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'coursec_title',
        'label'       => 'Курсы Шаг 1 Оглавление текст',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'courses',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upper_tabs_nav_and_content',
        'label'       => 'Курсы Шаг 1 навигация и контент',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'courses',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'tabs_foundation_title_append',
            'label'       => 'tabs-foundation-title-append',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'tabs_foundation_id',
            'label'       => 'tabs-foundation-id',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'tab_foundation_content',
            'label'       => 'tab-foundation-content',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'tab_foundation_content_title',
            'label'       => 'tab-foundation-content-title',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'coursec_step_2_title',
        'label'       => 'Курсы Шаг 2 Оглавление текст',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'courses',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'coursec_step_2_card',
        'label'       => 'Курсы Шаг 2 контент',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'courses',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'coursec_step_2_card_title',
            'label'       => 'Название курса',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_purpose',
            'label'       => 'Назначение курса',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_included_title',
            'label'       => 'Оглавление "Курс включает"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_included_text',
            'label'       => 'Текст "Курс включает"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_price_title',
            'label'       => 'Оглавление "Стоимость"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_price_number',
            'label'       => 'Значение "Стоимость"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
        'id'          => 'coursec_step_2_card',
        'label'       => 'Курсы Шаг 2 контент',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'courses',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'coursec_step_2_card_title',
            'label'       => 'Название курса',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_purpose',
            'label'       => 'Назначение курса',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_included_title',
            'label'       => 'Оглавление "Курс включает"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_included_text',
            'label'       => 'Текст "Курс включает"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_price_title',
            'label'       => 'Оглавление "Стоимость"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_price_number',
            'label'       => 'Значение "Стоимость"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'coursec_step_2_card',
        'label'       => 'Курсы Шаг 2 контент',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'courses',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'coursec_step_2_card_title',
            'label'       => 'Название курса',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_purpose',
            'label'       => 'Назначение курса',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_included_title',
            'label'       => 'Оглавление "Курс включает"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_included_text',
            'label'       => 'Текст "Курс включает"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_price_title',
            'label'       => 'Оглавление "Стоимость"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'coursec_step_2_card_price_number',
            'label'       => 'Значение "Стоимость"',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
      ),
    )
  )
        )
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}