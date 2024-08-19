<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WPDevPortfolio
 */

get_header();
?>

<main class="py-20 px-4 md:px-8 bg-gray-50">
    <div class="max-w-4xl mx-auto">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white shadow-md rounded-lg overflow-hidden'); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="h-64 md:h-96 overflow-hidden">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                <?php endif; ?>
                
                <div class="p-8">
                    <header class="entry-header mb-8">
                        <?php the_title('<h1 class="text-4xl font-bold text-gray-900">', '</h1>'); ?>
                    </header>

                    <div class="entry-content prose max-w-none text-gray-700">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links mt-4 pt-4 border-t border-gray-200">' . esc_html__('Pages:', 'wp-dev-portfolio'),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>

                    <?php if (get_edit_post_link()) : ?>
                        <footer class="entry-footer mt-8 pt-4 border-t border-gray-200">
                            <?php
                            edit_post_link(
                                sprintf(
                                    wp_kses(
                                        /* translators: %s: Name of current post. Only visible to screen readers */
                                        __('Edit <span class="screen-reader-text">%s</span>', 'wp-dev-portfolio'),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post(get_the_title())
                                ),
                                '<span class="edit-link text-purple-700 hover:text-purple-800 transition-colors">',
                                '</span>'
                            );
                            ?>
                        </footer>
                    <?php endif; ?>
                </div>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();