<?php
/**
 * Custom admin hooks
 */

function admin_css() {
  echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('template_directory') . '/assets/css/admin.css" />';
}
add_action('admin_head', 'admin_css');



// Move Pages above Media
function change_menu_order( $menu_order ) {
    return array(
        'index.php',
        'edit.php',
        'upload.php',
        'edit.php?post_type=page'
    );
}
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'change_menu_order' );




// style login form
function login_stylesheet() { ?>
    <link rel="stylesheet" id="login_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/assets/css/login.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'login_stylesheet' );