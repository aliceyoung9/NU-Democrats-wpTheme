<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar(array(
        'name' => 'Footer Widgets',
        'description' => 'Use three of these. These go on the bottom of every site.',
        'id' => 'footer',
        'before_widget' => '<div class="col-sm-3">',
        'after_widget' => '</div>',
        'before_title' => '<header>',
        'after_title' => '</header>',
    ) );

    register_sidebar(array(
        'name' => 'Front Page Widgets',
        'description' => 'Do not place more than 3 widgets here. These widgets will appear on the front page only.',
        'id' => 'frontpg',
        'before_widget' => '<div class="front-page-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
      ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>

<?php
/**
 * Register top menu.
 *
 */
register_nav_menu('main', 'Main navigation menu');
?>

<?php
/**
 * Adds ACF info for EBoard Page.
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
'key' => 'group_5869c0765011c',
'title' => 'Officers',
'fields' => array (
  array (
    'sub_fields' => array (
      array (
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => 'Jane Doe',
        'prepend' => '',
        'append' => '',
        'key' => 'field_5869c578c9e77',
        'label' => 'Officer Name',
        'name' => 'officer_name',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '40',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'key' => 'field_5869c597c9e78',
        'label' => 'Office',
        'name' => 'office',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
        'return_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'uploadedTo',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
        'key' => 'field_586a0883ab213',
        'label' => 'Profile Picture',
        'name' => 'pro_pic',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '30',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'key' => 'field_586a287b97aee',
        'label' => 'Major',
        'name' => 'major',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'key' => 'field_5869c5a8c9e79',
        'label' => 'Hometown',
        'name' => 'hometown',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
        'default_value' => '',
        'new_lines' => '',
        'maxlength' => '',
        'placeholder' => '',
        'rows' => 3,
        'key' => 'field_58704fd6fd290',
        'label' => 'Campaigns Worked On',
        'name' => 'campaigns_worked_on',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'key' => 'field_58704fe4fd291',
        'label' => 'Favorite Democrat',
        'name' => 'favorite_democrat',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
        'default_value' => '',
        'new_lines' => '',
        'maxlength' => '',
        'placeholder' => '',
        'rows' => 5,
        'key' => 'field_586a07f7e4f69',
        'label' => 'Favorite Quote',
        'name' => 'favorite_quote',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
      ),
      array (
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'key' => 'field_587051af15d84',
        'label' => 'Quote Attribution',
        'name' => 'quote_attribution',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
      ),
    ),
    'min' => 0,
    'max' => 0,
    'layout' => 'block',
    'button_label' => 'Add Another Officer',
    'collapsed' => 'field_5869c578c9e77',
    'key' => 'field_58683688daae5',
    'label' => 'Officers',
    'name' => 'officers',
    'type' => 'repeater',
    'instructions' => '',
    'required' => 1,
    'conditional_logic' => 0,
    'wrapper' => array (
      'width' => '',
      'class' => '',
      'id' => '',
    ),
  ),
),
'location' => array (
  array (
    array (
      'param' => 'page_template',
      'operator' => '==',
      'value' => 'eboard.php',
    ),
  ),
),
'menu_order' => 0,
'position' => 'acf_after_title',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => array (
  0 => 'the_content',
),
'active' => 1,
'description' => 'Enter all officers.',
));

endif;
?>
