<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MTK3BJBM3Y"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-MTK3BJBM3Y');
    </script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    if (is_single()) {
        $post_id = get_queried_object_id();
        $og_title = get_the_title($post_id);
        $og_description = has_excerpt($post_id) ? get_the_excerpt($post_id) : wp_trim_words(get_the_content(null, false, $post_id), 55, '...');
        $og_image = get_the_post_thumbnail_url($post_id, 'full'); // Changed to 'full' size
        $og_url = get_permalink($post_id);
        $fb_app_id = '1025179232422540'; // Your Facebook App ID
        ?>
        <meta property="fb:app_id" content="<?php echo esc_attr($fb_app_id); ?>" />
        <meta property="og:title" content="<?php echo esc_attr($og_title); ?>" />
        <meta property="og:description" content="<?php echo esc_attr($og_description); ?>" />
        <?php if ($og_image) : ?>
        <meta property="og:image" content="<?php echo esc_url($og_image); ?>" />
        <?php endif; ?>
        <meta property="og:url" content="<?php echo esc_url($og_url); ?>" />
        <?php
    }
    ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen bg-gray-50 text-gray-900'); ?>>
    <header class="py-6 px-4 md:px-8 bg-white shadow-sm">
        <nav class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold text-purple-700"><a href="/"><img
                        src="/wp-content/themes/cgdiomampo/assets/images/logo.webp" alt="CD Icon" width="50"
                        height="50"></a></div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => 'ul', // Ensures no wrapping <div>
                'menu_class' => 'flex space-x-8', // Applies classes directly to <ul>
                //'items_wrap' => '<ul class="%2$s">%3$s</ul>', // Custom wrapper to apply classes directly to <ul>
            ));
            ?>
        </nav>
    </header>