<?php
/**
 * The template for displaying single posts
 *
 * @package WPDevPortfolio
 */

get_header();
?>

<main class="py-20 px-4 md:px-8 bg-gray-50 ">
    <div class="max-w-6xl mx-auto">
        <?php while (have_posts()) : the_post(); ?>
        <article class="bg-white shadow-md rounded-lg overflow-hidden">
            <?php if (has_post_thumbnail()) : ?>
            <div class="h-96 overflow-hidden">
                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
            </div>
            <?php endif; ?>
            <div class="p-8">
                <h1 class="text-4xl font-bold mb-4 text-gray-900"><?php the_title(); ?></h1>
                <div class="text-sm text-gray-600 mb-6">
                    <?php echo get_the_date(); ?> by <?php the_author(); ?>
                </div>
                <div class="prose max-w-none text-gray-700 blog-content">
                    <?php the_content(); ?>
                </div>
                <div class="mt-8 pt-4 border-t border-gray-200">
                    <?php
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . __('Pages:', 'wp-dev-portfolio'),
                            'after'  => '</div>',
                        ));
                        ?>
                </div>
                <div class="mt-8 flex justify-between">
                    <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>
                    <?php if (!empty($prev_post)) : ?>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>"
                        class="text-purple-700 hover:text-purple-800">
                        <span class="block text-sm"><?php _e('Previous Post', 'wp-dev-portfolio'); ?></span>
                        <span class="block font-semibold"><?php echo get_the_title($prev_post->ID); ?></span>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($next_post)) : ?>
                    <a href="<?php echo get_permalink($next_post->ID); ?>"
                        class="text-purple-700 hover:text-purple-800 text-right">
                        <span class="block text-sm"><?php _e('Next Post', 'wp-dev-portfolio'); ?></span>
                        <span class="block font-semibold"><?php echo get_the_title($next_post->ID); ?></span>
                    </a>
                    <?php endif; ?>
                </div>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
            </div>
        </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>