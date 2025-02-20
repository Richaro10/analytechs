<?php get_header(); ?>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24">
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 py-12">
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="aspect-w-16 aspect-h-9">
                            <?php the_post_thumbnail('blog-thumbnail', array('class' => 'w-full h-64 object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-4">
                            <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-accent">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="text-gray-600 mb-4">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><?php echo get_the_date(); ?></span>
                            <span><?php the_author(); ?></span>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="pb-12">
            <?php 
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('Précédent', 'analytechs'),
                'next_text' => __('Suivant', 'analytechs')
            )); 
            ?>
        </div>
    <?php else : ?>
        <div class="py-12 text-center">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">
                <?php _e("Aucun article trouvé", 'analytechs'); ?>
            </h2>
            <p class="text-gray-600">
                <?php _e("Désolé, aucun article ne correspond à votre recherche.", 'analytechs'); ?>
            </p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>