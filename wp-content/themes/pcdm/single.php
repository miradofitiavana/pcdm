<?php get_header(); ?>

<?php get_header('page') ?>

    <section class="py-12 lg:py-24 single-page">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="container flex flex-col gap-y-12 lg:gap-y-24">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>