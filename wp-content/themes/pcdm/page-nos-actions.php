<?php
/*
Template Name: Agir avec Nous
*/
?>

<?php get_header(); ?>

<?php get_header('page') ?>

    <section class="py-12 lg:py-24">
        <div class="container lg:px-20 md:px-6 px-4">
            <div class="w-full">
                <p class="pre-title">Nos actions auprès des enfants</p>
                <h2 class="xl:w-8/12 lg:w-10/12 w-full">Donner une chance à chaque enfant de grandir heureux</h2>
                <p class="font-normal text-base leading-6 text-gray-600 mt-6 text-justify">
                    Chez Petits Coeurs du Monde, nous
                    croyons que tous les enfants méritent une vie heureuse et riche en opportunités. C'est pour cette
                    raison que nous nous efforçons de faire une différence positive dans le monde, en nous concentrant
                    sur les besoins des enfants. Peu importe où nous agissons, notre engagement envers ce but reste le
                    même : soutenir les enfants dans leur développement et leur offrir une vie pleine d'espoir et de
                    possibilités.
                </p>
            </div>

            <div class="lg:mt-14 sm:mt-10 mt-12">
                <img class="lg:block hidden w-full" src="https://i.ibb.co/GvwJnvn/Group-736.png"
                     alt="Group of people Chilling"/>
                <img class="lg:hidden sm:block hidden w-full" src="https://i.ibb.co/5sZTmHq/Rectangle-116.png"
                     alt="Group of people Chilling"/>
                <img class="sm:hidden block w-full" src="https://i.ibb.co/zSxXJGQ/Rectangle-122.png"
                     alt="Group of people Chilling"/>
            </div>

            <div class="lg:mt-16 sm:mt-12 mt-16 flex lg:flex-row justify-between flex-col lg:gap-8 gap-12">
                <div class="w-full">
                    <h2 class="text-center">Nos moyens d'actions</h2>
                    <p class="max-w-3xl mx-auto mt-4 text-lg text-center text-gray-600">Petits Coeurs du Monde
                        intervient simultanément dans 6 domaines essentiels au bien-être des
                        enfants démunis : l’éducation, la santé, la culture, l’alimentation, le parrainage et la
                        sensibilisation.</p>
                    <?php
                    $the_query = new WP_Query(array(
                        'category_name' => 'nos-actions'
                    ));
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <div class="mt-16">
                            <div class="flex gap-8">
                                <div class="hidden lg:block lg:max-w-[30%]">
                                    <ul class="checklist-select flex flex-col gap-4" role="tablist">
                                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                            <li id="tab<?= get_the_ID() ?>"
                                                class="justify-between gap-x-6 text-lg font-semibold active cursor-pointer min-h-48px flex items-center border-none px-4 py-3 transition-colors duration-300 rounded-container"
                                                role="tab"
                                                aria-controls="panel<?= get_the_ID() ?>"
                                                aria-selected="true">
                                                <?php the_title_attribute() ?>

                                                <i class="fa-solid fa-arrow-right opacity-0"></i>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                                <div class="flex-1 flex flex-col gap-y-4">
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <div class="box tab<?= get_the_ID() ?>-box lg:hidden"
                                             id="panel<?= get_the_ID() ?>"
                                             role="tabpanel"
                                             aria-labelledby="tab<?= get_the_ID() ?>">
                                            <h3><?php the_title_attribute() ?></h3>
                                            <br>
                                            <div class="flex flex-col lg:flex-row gap-8 justify-between from-wp">
                                                <div class="lg:w-[60%]">
                                                    <?= get_post_meta(get_the_ID(), 'texte_de_description', true) ?>
                                                </div>
                                                <div class="lg:w-[40%]">
                                                    <img alt="<?php the_title_attribute() ?>"
                                                         src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
                                                         class="rounded-container w-full h-64 object-cover opacity-75 transition-opacity group-hover:opacity-50 mb-4"
                                                    />
                                                    <a href="<?= get_permalink() ?>"
                                                       title="<?php the_title_attribute() ?>"
                                                       class="btn btn--max w-full">Agir avec Petits Coeurs du Monde</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>

    <section class="py-12 lg:py-24 bg-gray-50">
        <div class="mx-auto container">
            <div>
                <h2 class="text-center">Aliquip definiebas ad est</h2>
                <p class="max-w-3xl mx-auto mt-4 text-lg text-center text-gray-600">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nullam egestas finibus ultrices. Nulla ante tortor, commodo sit
                    amet lorem sed, vestibulum faucibus nisi. Donec lacus tellus, pretium non consequat non,
                    vehicula ac leo.</p>
            </div>
            <div role="list" aria-label="Our stats."
                 class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                <div role="listitem" class="flex justify-center w-full lg:border-r border-gray-300 py-6">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/4_col_with%20_icons-svg1.svg"
                         alt="profile"/>
                    <div class="text-gray-800 pl-12 w-1/2">
                        <h1 class="font-bold text-2xl lg:text-5xl tracking-1px">450</h1>
                        <h2 class="text-base lg:text-lg mt-4 leading-8 tracking-wide"> Happy Clients. </h2>
                    </div>
                </div>
                <div role="listitem" class="flex justify-center w-full lg:border-r border-gray-300 py-6">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/4_col_with%20_icons-svg2.svg"
                         alt="ambulance"/>
                    <div class="text-gray-800 w-1/2 pl-12">
                        <h1 class="font-bold text-2xl lg:text-5xl tracking-1px">10+</h1>
                        <h2 class="text-base lg:text-lg mt-4 leading-8 tracking-wide"> Insurance Solutions </h2>
                    </div>
                </div>
                <div role="listitem" class="flex justify-center w-full lg:border-r border-gray-300 py-6">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/4_col_with%20_icons-svg3.svg"
                         alt="clock"/>
                    <div class="text-gray-800 w-1/2 pl-12">
                        <h1 class="font-bold text-2xl lg:text-5xl tracking-1px">35</h1>
                        <h2 class="text-base lg:text-lg mt-4 leading-8 tracking-wide"> Years of Experience </h2>
                    </div>
                </div>
                <div role="listitem" class="flex justify-center w-full py-6">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/4_col_with%20_icons-svg4.svg"
                         alt="cube"/>
                    <div class="text-gray-800 w-1/2 pl-12">
                        <h1 class="font-bold text-2xl lg:text-5xl tracking-1px">530</h1>
                        <h2 class="text-base lg:text-lg mt-4 leading-8 tracking-wide"> Projects Completed </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once(get_template_directory().'/components/cta.php'); ?>

<?php
$the_query = new WP_Query(array(
    'posts_per_page' => -1,
    'category_name'  => 'nos-projets'
));
?>
<?php if ($the_query->have_posts()) : ?>
    <section class="pb-24">
        <div class="container">
            <span class="text-lg font-bold text-brand-500 text-center block">Nos projets récents</span>
            <h2 class="text-primary-500 text-center">Nous avons fait une différence dans leur vie</h2>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-12 pt-16">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="shadow-lg rounded-container overflow-hidden">
                        <img src="<?= get_the_post_thumbnail_url() ?>"
                             class="w-full h-[230px] object-cover">
                        <div class="px-4 py-6">
                            <p class="text-brand-500"><?= get_the_date() ?></p>
                            <h3 class="text-xl"><?php the_title(); ?></h3>
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

<?php include_once(get_template_directory().'/components/cta-benevole.php'); ?>


<?php get_footer(); ?>