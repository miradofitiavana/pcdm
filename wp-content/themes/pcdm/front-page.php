<?php get_header(); ?>
<?php
$currentPageID = get_queried_object_id();
$image         = wp_get_attachment_image_src(get_post_thumbnail_id($currentPageID), 'single-post-thumbnail');
?>

    <section style="background-image: url('<?php echo $image[0]; ?>')"
             class="relative bg-cover bg-no-repeat lg:py-[200px]">
        <div class="w-full relative px-6 xl:p-0 py-20 z-30">
            <div class="lg:flex items-center relative z-10 container mx-auto">
                <div role="contentinfo" class="w-full lg:w-1/2 h-full">
                    <h1 tabindex="0" class="text-white text-4xl lg:text-6xl font-black mb-8">Petits <span
                                class="text-white">Coeurs</span> du <span class="text-white">Monde</span></h1>
                    <p tabindex="0" class="text-white text-2xl lg:text-3xl font-regular mb-8">...pour redonner le
                        sourire aux enfants du monde.</p>

                    <button class="btn btn--white btn--max btn--icon">
                        <i class="fa-solid fa-hand-holding-heart text-brand-500"></i>
                        Nous soutenir
                    </button>
                </div>

                <div class="w-full lg:w-1/2 h-full lg:pr-10 xl:pr-0">
                </div>
            </div>
        </div>
        <div class="bg-opacity-70 absolute inset-0 z-20 bg-black"></div>
    </section>

    <section class="py-12 lg:py-24">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-12">
            <div>
                <img src="https://harmo.bikebuzzbd.com/wp-content/uploads/2022/04/ty1.jpg"/>
            </div>
            <div>
                <span class="text-lg font-bold text-brand-500">Petits Coeurs du Monde</span>
                <h2 class="text-primary-500">Une association à taille humaine</h2>
                <p class="text-justify mt-4">
                    Petits Coeurs du Monde est une association française de Loi 1901 à but non lucratif qui a été créée
                    le 14 novembre 2021.
                </p>
                <p class="text-justify mt-2">
                    Nous avons pour objectif de venir en aide aux enfants les plus défavorisés dans le
                    monde entier en travaillant en étroite collaboration avec les associations locales, qui sont les
                    témoins directs des conditions difficiles auxquelles les enfants font face au quotidien.
                </p>

                <div class="py-8 flex flex-col gap-y-4">
                    <div class="flex flex-row gap-4 items-center">
                        <div>
                            <img src="https://fakeimg.pl/80x80/ff0000/">
                        </div>
                        <div>
                            <h3 class="text-xl mb-2">Who we are</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit Morbi vitae. will be distracted</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4 items-center">
                        <div>
                            <img src="https://fakeimg.pl/80x80/ff0000/">
                        </div>
                        <div>
                            <h3 class="text-xl mb-2">Who we are</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit Morbi vitae. will be distracted</p>
                        </div>
                    </div>
                </div>

                <a href="/notre-association/" class="btn btn--max btn--icon">
                    <i class="fa-solid fa-plus text-white"></i>
                    En savoir plus
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 lg:py-24 relative bg-no-repeat bg-cover"
             style="background-image: url('https://azijulbd.com/themex/onath/wp-content/uploads/2020/10/video-bg.png')">
        <div class="bg-primary-500 absolute inset-0 bg-opacity-80"></div>
        <div class="container text-center relative z-20">
            <span class="text-lg font-bold text-brand-500">Agir avec nous</span>
            <h2 class="text-white">Comment vous pouvez nous aider</h2>
            <p class="text-center mt-4 text-xl text-white">En agissant à votre niveau, vous pouvez contribuer à un
                changement à l'échelle mondiale.</p>
            <div class="pt-16 grid grid-cols-1 md:grid-cols-3 gap-x-16 gap-y-12">
                <div>
                    <img class="mx-auto h-[100px]" src="<?= get_template_directory_uri() ?>/assets/images/benevole.svg">
                    <h3 class="text-white text-xl my-2">Devenir bénévole</h3>
                    <p class="text-white">Rejoignez-nous dès maintenant et devenez un acteur actif dans la lutte contre
                        la pauvreté et les inégalités dans le monde.</p>
                </div>
                <div>
                    <img class="mx-auto h-[100px]" src="<?= get_template_directory_uri() ?>/assets/images/donateur.svg">
                    <h3 class="text-white text-xl my-2">Devenir donateur</h3>
                    <p class="text-white">Soutenez un des projets mis en oeuvre par notre association et .</p>
                </div>
                <div>
                    <img class="mx-auto h-[100px]"
                         src="<?= get_template_directory_uri() ?>/assets/images/partenaire.svg">
                    <h3 class="text-white text-xl my-2">Devenir partenaire</h3>
                    <p class="text-white">Engagez-vous</p>
                </div>
            </div>
        </div>
    </section>

<?php include_once(get_template_directory().'/components/cta.php'); ?>


<?php
// the query
$the_query = new WP_Query(array(
    'posts_per_page' => 3,
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
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"
                             class="w-full h-[230px] object-cover">
                        <div class="px-4 py-6">
                            <p class="text-brand-500"><?= get_the_date()?></p>
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


<?php include_once(get_template_directory().'/components/cta-benevole.php'); ?>

    <section class="py-12 lg:py-24">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-12 pt-16">
            <div>
                <img src="https://harmo.bikebuzzbd.com/wp-content/uploads/elementor/thumbs/h-pn7bkqkatfb0ge4iuou5g33ogeohzyzj49851r4vf8.jpg"
                     class="w-full h-[200px] lg:h-[400px] object-cover rounded-t-container lg:rounded-none">
                <div class="lg:mx-12 bg-brand-500 text-white px-8 py-6 lg:py-12 rounded-b-container lg:rounded-container lg:-mt-[100px] relative z-20">
                    <p class="text-white">28 sep. 2022</p>
                    <h3 class="text-xl text-white">I Will Tell You The Truth About Nonprofit</h3>
                    <div class="w-full bg-secondary-500 rounded-full my-4 h-5">
                        <div class="bg-white h-5 text-xs font-medium text-secondary-500 text-center p-0.5 leading-none rounded-l-full flex items-center justify-center font-bold"
                             style="width: 25%"> 25%
                        </div>
                    </div>
                    <a href="#" class="btn btn--max btn--white w-full lg:w-auto btn--icon">
                        <i class="fa-solid fa-hand-holding-heart text-brand-500"></i>
                        Soutenir le projet
                    </a>
                </div>
            </div>

            <div>
                <img src="https://harmo.bikebuzzbd.com/wp-content/uploads/elementor/thumbs/bg5-1100x733-1-pncmqgeitfuwwu1ogclzeib8a3ki8sxgllhel3jkt0.jpg"
                     class="w-full h-[200px] lg:h-[400px] object-cover rounded-t-container lg:rounded-none">
                <div class="lg:mx-12 bg-brand-500 text-white px-8 py-6 lg:py-12 rounded-b-container lg:rounded-container lg:-mt-[100px] relative z-20">
                    <p class="text-white">28 sep. 2022</p>
                    <h3 class="text-xl text-white">I Will Tell You The Truth About Nonprofit</h3>
                    <div class="w-full bg-secondary-500 rounded-full my-4 h-5">
                        <div class="bg-white h-5 text-xs font-medium text-secondary-500 text-center p-0.5 leading-none rounded-l-full flex items-center justify-center font-bold"
                             style="width: 25%"> 25%
                        </div>
                    </div>
                    <a href="#" class="btn btn--max btn--white w-full lg:w-auto btn--icon">
                        <i class="fa-solid fa-hand-holding-heart text-brand-500"></i>
                        Soutenir le projet
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="pt-24 space-y-2 lg:space-y-0 lg:gap-2 lg:grid lg:grid-cols-4">
        <div class="w-full transition-all duration-300 hover:opacity-50">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                 alt="image">
        </div>
        <div class="w-full transition-all duration-300 hover:opacity-50">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                 alt="image">
        </div>
        <div class="w-full transition-all duration-300 hover:opacity-50">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                 alt="image">
        </div>
        <div class="w-full transition-all duration-300 hover:opacity-50">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                 alt="image">
        </div>
    </div>
<?php get_footer(); ?>
