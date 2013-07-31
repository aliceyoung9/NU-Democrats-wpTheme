<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'footer widgets',
        'id' => 'footer',
        'before_widget' => '<div class="span4">',
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