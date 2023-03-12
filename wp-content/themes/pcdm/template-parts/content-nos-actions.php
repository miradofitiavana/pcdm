<?php

// Projets du pôle
$id   = get_the_ID();
$tags = wp_get_post_tags($id);

if ($tags) {
    $tagIDs = [];
    if (count($tags) > 0) {
        foreach ($tags as $tag) {
            $tagIDs[] = $tag->term_id;
        }
    }

    $the_query = new WP_Query(array(
        'posts_per_page' => 3,
        'tag__in'        => $tagIDs,
        'category_name'  => 'nos-projets'
    ));
}
?>

<section class="py-12 lg:py-24 single-page">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="flex flex-col gap-y-12 lg:gap-y-24">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php if (isset($the_query) && $the_query->have_posts()) : ?>
    <section class="py-12 lg:py-24">
        <div class="container">
            <span class="text-lg font-bold text-brand-500 text-center block">Nos projets</span>
            <h2 class="text-4xl text-primary-500 text-center"><?= the_title() ?>, c'est :</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-12 pt-16">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="shadow-lg rounded-container overflow-hidden">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"
                             class="w-full h-[230px] object-cover">
                        <div class="px-4 py-6">
                            <p class="text-brand-500"><?= get_the_date() ?></p>
                            <h3 class="text-xl"> <?php the_title(); ?></h3>
                            <p class="my-2"><?php the_excerpt(); ?></p>
                            <a href="<?= get_permalink() ?>" class="font-bold text-brand-500">Voir plus</a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
