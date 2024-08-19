<?php
/**
 * Template Name: Blog Page
 *
 * @package WPDevPortfolio
 */

get_header();
?>

<main class="py-20 px-4 md:px-8 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl font-bold mb-12 text-center text-gray-900"><?php the_title(); ?></h1>

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => $paged
        );
        $blog_query = new WP_Query($args);

        if ($blog_query->have_posts()) : ?>
        <div class="grid gap-12">
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <article class="bg-white shadow-md rounded-lg overflow-hidden">
                <?php if (has_post_thumbnail()) : ?>
                <div class="h-64 overflow-hidden">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                </div>
                <?php endif; ?>
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">
                        <a href="<?php the_permalink(); ?>"
                            class="text-gray-900 hover:text-purple-700 transition-colors">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="text-sm text-gray-600 mb-4">
                        <?php echo get_the_date(); ?> by <?php the_author(); ?>
                    </div>
                    <div class="text-gray-700 mb-4">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>"
                        class="inline-block bg-purple-700 hover:bg-purple-800 text-white font-semibold py-2 px-4 rounded transition-colors">
                        Read More
                    </a>
                </div>
            </article>
            <?php endwhile; ?>
        </div>

        <div class="mt-12">
            <?php
                echo paginate_links(array(
                    'total' => $blog_query->max_num_pages,
                    'prev_text' => __('Previous', 'wp-dev-portfolio'),
                    'next_text' => __('Next', 'wp-dev-portfolio'),
                ));
                ?>
        </div>

        <?php else : ?>
        <p class="text-center text-gray-700">No posts found.</p>
        <?php 
        endif;
        wp_reset_postdata();
        ?>
    </div>
</main>

<?php get_footer(); ?>