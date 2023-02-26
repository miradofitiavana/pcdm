<?php
/*
Template Name: Agir avec Nous
*/
?>

<?php get_header(); ?>

<?php get_header('page') ?>

    <section class="bg-gray-50 py-12 lg:py-24">
        <div class="container max-w-xl px-6 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div>
                <h2 class="text-center">Agissez avec nous pour aider les enfants démunis</h2>
                <p class="max-w-3xl mx-auto mt-4 text-xl text-center text-gray-600">Devenez bénévole, mobilisez votre
                    école et même impliquez votre entreprise... autant de possibilités de s'engager !</p>
            </div>
        </div>
    </section>

<?php
$the_query = new WP_Query(array(
    'posts_per_page' => -1,
    'category_name'  => 'agir-avec-nous'
));
$agirIndex = 0;
?>

<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <section class="py-12 lg:py-24 <?= $agirIndex % 2 === 0 ? '' : 'bg-gray-50' ?>">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full <?= $agirIndex % 2 === 0 ? 'lg:order-first' : '' ?>">
                    <img
                            alt="Party"
                            src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="absolute inset-0 h-full w-full object-cover"
                    />
                </div>

                <div class="<?= $agirIndex % 2 === 0 ? 'lg:order-last' : '' ?>">
                    <h2><?php the_title(); ?></h2>

                    <?= get_post_meta(get_the_ID(), 'texte-de-presentation', true); ?>
                    <?php echo get_post_meta(get_the_ID(), 'label-vers-la-page', true) ?>
                    <a href="<?= get_permalink(get_post_meta(get_the_ID(), 'url-vers-la-page', true)) ?>"
                       class="btn btn--max w-full lg:w-auto btn--icon mt-8">

                        <?php echo get_post_meta(get_the_ID(), 'bouton_vers_la_page', true) ?>

                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php $agirIndex++; ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>