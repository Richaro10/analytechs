<?php get_header(); ?>

<main class="pt-24">
    <?php while (have_posts()) : the_post(); ?>
        <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <header class="mb-8">
                <h1 class="text-4xl font-bold text-neutral mb-4">
                    <?php the_title(); ?>
                </h1>
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <span class="mr-4"><?php echo get_the_date(); ?></span>
                    <span><?php the_author(); ?></span>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="rounded-lg overflow-hidden mb-8">
                        <?php the_post_thumbnail('hero-image', array('class' => 'w-full h-auto')); ?>
                    </div>
                <?php endif; ?>
            </header>

            <div class="prose prose-lg max-w-none">
                <?php the_content(); ?>
            </div>

            <footer class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex flex-wrap gap-4">
                    <?php
                    $categories = get_the_category();
                    if ($categories) :
                    ?>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-500 mr-2">Categories:</span>
                            <?php
                            foreach ($categories as $category) {
                                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="text-sm text-accent hover:text-primary">' . esc_html($category->name) . '</a>';
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                    ?>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-500 mr-2">Tags:</span>
                            <?php
                            foreach ($tags as $tag) {
                                echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="text-sm text-accent hover:text-primary">' . esc_html($tag->name) . '</a>';
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </footer>

            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>