<?php get_header(); ?>

<main class="pt-24">
    <?php while (have_posts()) : the_post(); ?>
        <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <header class="mb-8">
                <h1 class="text-4xl font-bold text-neutral mb-4">
                    <?php the_title(); ?>
                </h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="rounded-lg overflow-hidden mb-8">
                        <?php the_post_thumbnail('hero-image', array('class' => 'w-full h-auto')); ?>
                    </div>
                <?php endif; ?>
            </header>

            <div class="prose prose-lg max-w-none">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>