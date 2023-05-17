<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

add_image_size('blog', 800, 400, true);
add_image_size('blog-list', 480, 360, true);
add_image_size('small', 450, 450, true);
add_image_size('portfolio', 450, 450, true);
add_image_size('album', 350, 250, true);
add_filter('big_image_size_threshold','__return_false');

// OPÇÕES DE TEMPLATE
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Opções do Tema',
        'menu_title'    => 'Opções do Tema',
        'menu_slug'     => 'opcao-do-tema',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// MENU
function my_custom_menu() {
    register_nav_menu('menu_principal',__('Menu Principal'));
}
add_action('init', 'my_custom_menu');

/**
 * Stylesheets & scripts
 */
add_action('wp_enqueue_scripts', function () {
    $dir = get_template_directory_uri();
    // jQuery
    wp_deregister_script('jquery');
    // Main
    wp_enqueue_style('theme', $dir.'/css/default-theme.css');
    // wp_enqueue_style('font', $dir.'/css/fonts/stylesheet.css');
}, 1);


// ESCONDE SEÇÕES DE USUARIO LOGADO
$user_id = get_current_user_id();
if ($user_id == 2) { 
 remove_action( 'admin_menu', 'cptui_plugin_menu' );
 function remove_menus(){
 remove_menu_page( 'index.php' ); //Dashboard 
 // remove_menu_page( 'edit.php' ); //Posts - publicações
 // remove_menu_page( 'upload.php' ); //Media - imagens, vídeos, docs, etc...
 remove_menu_page( 'edit-comments.php' ); //Comments - comentários
 // remove_menu_page( 'themes.php' ); //Appearance - aparência (recomendo!)
 remove_menu_page( 'plugins.php' ); //Plugins (recomendo!)
 // remove_menu_page( 'users.php' ); //Users - usuários 
 remove_menu_page( 'tools.php' ); //Tools - ferramentas (recomendo!)
 remove_menu_page( 'options-general.php' ); //Settings - configurações 
 remove_menu_page( 'edit.php?post_type=acf-field-group' ); 
 remove_menu_page( 'wpseo_dashboard' ); 
 }
 add_action( 'admin_menu', 'remove_menus' );
}
