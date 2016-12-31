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
        'before_widget' => '<div class="span3">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
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
