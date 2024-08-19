<?php
/**
 * WP Dev Portfolio Theme Functions
 *
 * @package WPDevPortfolio
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue styles for the theme
 */
function wp_dev_portfolio_enqueue_styles() {
    wp_enqueue_style('tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css', array(), '2.2.19');
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'wp_dev_portfolio_enqueue_styles');

/**
 * Register navigation menus
 */
function wp_dev_portfolio_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu', 'wp-dev-portfolio'),
        )
    );
}
add_action('init', 'wp_dev_portfolio_register_menus');

function add_menu_link_class($atts, $item, $args) {
    // Add your classes here
    $atts['class'] = 'hover:text-purple-700 transition-colors';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);

/**
 * Create custom post type for projects
 */
function create_project_post_type() {
    register_post_type('project',
        array(
            'labels' => array(
                'name' => __('Projects', 'wp-dev-portfolio'),
                'singular_name' => __('Project', 'wp-dev-portfolio')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-portfolio',
            'rewrite' => array('slug' => 'projects'),
        )
    );
}
add_action('init', 'create_project_post_type');

/**
 * Add theme support for various features
 */
function wp_dev_portfolio_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'wp_dev_portfolio_theme_support');

/**
 * Register widget area
 */
function wp_dev_portfolio_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'wp-dev-portfolio'),
        'id'            => 'footer-widget-area',
        'description'   => __('Add widgets here to appear in your footer.', 'wp-dev-portfolio'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'wp_dev_portfolio_widgets_init');

/**
 * Customize excerpt length
 */
function wp_dev_portfolio_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'wp_dev_portfolio_custom_excerpt_length', 999);

/**
 * Change excerpt more string
 */
function wp_dev_portfolio_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'wp_dev_portfolio_excerpt_more');

/**
 * Custom pagination styling
 */
function wp_dev_portfolio_pagination_classes($classes) {
    $classes[] = 'flex';
    $classes[] = 'justify-center';
    $classes[] = 'space-x-2';
    $classes[] = 'my-8';
    return $classes;
}
add_filter('navigation_markup_template', 'wp_dev_portfolio_pagination_template', 10, 2 );
function wp_dev_portfolio_pagination_template($template, $class) {
    return '
    <nav class="navigation %1$s" role="navigation">
        <div class="nav-links flex justify-center space-x-2 my-8">%3$s</div>
    </nav>    
    ';
}

add_filter('next_posts_link_attributes', 'wp_dev_portfolio_pagination_link_attributes');
add_filter('previous_posts_link_attributes', 'wp_dev_portfolio_pagination_link_attributes');
function wp_dev_portfolio_pagination_link_attributes() {
    return 'class="px-4 py-2 bg-purple-700 text-white rounded hover:bg-purple-800 transition-colors"';
}

function wp_dev_portfolio_custom_pagination($query = null) {
    global $wp_query;
    $query = $query ? $query : $wp_query;

    $big = 999999999; // need an unlikely integer
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'type' => 'array',
        'prev_next' => true,
        'prev_text' => __('&laquo; Previous', 'wp-dev-portfolio'),
        'next_text' => __('Next &raquo;', 'wp-dev-portfolio'),
    ));

    if (is_array($pages)) {
        echo '<div class="pagination flex justify-center space-x-2 my-8">';
        foreach ($pages as $page) {
            $page = str_replace('page-numbers', 'page-numbers px-4 py-2 bg-purple-700 text-white rounded hover:bg-purple-800 transition-colors', $page);
            echo $page;
        }
        echo '</div>';
    }
}

function enqueue_floating_snippets_script() {
    wp_enqueue_script('animations', get_template_directory_uri() . '/assets/js/animations.js', array(), null, true);
    wp_enqueue_script('portfoliojs', get_template_directory_uri() . '/assets/js/portfolio.js', array(), null, true);
    wp_enqueue_script('contactjs', get_template_directory_uri() . '/assets/js/contact.js', array(), null, true);
    wp_enqueue_script('rgbtext', get_template_directory_uri() . '/assets/js/rgbtext.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_floating_snippets_script');


/* Contact Form */

function handle_contact_form_submission() {
    check_ajax_referer('contact_form_submit', '_wpnonce');

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Process the form data (e.g., send an email, save to database, etc.)
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    $mail_sent = wp_mail($to, $subject, $body, $headers);

    wp_send_json(array('success' => $mail_sent));
}
add_action('wp_ajax_submit_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_contact_form_submission');