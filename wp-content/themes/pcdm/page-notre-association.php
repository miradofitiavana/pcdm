<?php
/*
Template Name: Notre Association
*/
?>

<?php get_header(); ?>

<?php get_header('page') ?>

<section class="py-12 lg:py-24 text-gray-800">
    <div class="container max-w-xl px-6 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
        <div>
            <!--            <p class="h2 text-center">Une Association de solidarité internationale</p>-->
            <p class="max-w-3xl mx-auto mt-4 text-base lg:text-lg text-center text-gray-600">Créée le 14 novembre
                2021, l'association Petits Coeurs du Monde est une association à but non lucratif régie par la loi
                1901 qui oeuvre pour les enfants démunis dans le monde.</p>
            <p class="max-w-3xl mx-auto mt-0 text-base lg:text-lg text-center text-gray-600">
                L'association est
                composée de cinq membres fondateurs, ainsi que de membres donateurs et de bénévoles. Le siège
                social de Petits Coeurs du Monde se trouve à Livry-Gargan, dans le département de la
                Seine-Saint-Denis.
            </p>
        </div>
    </div>
</section>

<section class="py-12 lg:py-24 bg-gray-50 text-gray-800">
    <div class="container max-w-xl px-6 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-4 lg:px-8 lg:max-w-7xl">
        <div class="lg:order-1 flex items-center justify-center">
            <img src="https://i.ibb.co/Vm2T6Gj/team-1.png" class="lg:h-full mx-auto lg:max-h-[400px]"/>
        </div>
        <div class="lg:order-2">
            <h2 class="mb-8">Notre démarche</h2>
            <p class="mt-0 text-base text-gray-600">
                L'objectif principal de l'association "Petits Coeurs du Monde" est de soutenir les enfants défavorisés
                dans leur développement en leur offrant des opportunités et une vie pleine d'espoir.
            </p>
            <p class="mt-2 text-base text-gray-600">
                Pour cela, l'association travaille en collaboration étroite avec les associations locales pour
                venir en aide aux enfants qui sont confrontés à des conditions difficiles. Ces associations locales sont
                les témoins directs des situations que traversent ces enfants et leur collaboration
                est donc essentielle pour identifier les besoins des enfants.
            </p>
            <p class="mt-2 text-base text-gray-600">
                A partir des besoins identifiés, Petits Coeurs du Monde développe des actions spécifiques et adaptées à
                chaque étape de la vie des enfants, afin de leur permettre de s'épanouir pleinement malgré les
                difficultés qu'ils rencontrent.
            </p>
            <p class="mt-2 text-base text-gray-600">
                Cette approche permet à notre association de mettre en place des actions concrètes et ciblées qui
                répondent efficacement aux besoins des enfants les plus vulnérables. Elle permet également d'assurer une
                meilleure coordination des efforts en faveur des enfants, en impliquant les acteurs locaux et en
                renforçant les capacités des communautés locales à soutenir les enfants dans le besoin.
            </p>
        </div>
    </div>
</section>

<section class="py-12 lg:py-24 text-gray-800">
    <div class="container">
        <div class="mb-8 text-center">
            <h2>Nos engagements auprès des enfants</h2>
            <p class="mt-2 text-gray-600 text-center">
                L'association Petits Coeurs du Monde s’engage autour de plusieurs thématiques en faveur des enfants
                du monde :
            </p>
        </div>
        <div class="grid gap-4 md:gap-6 md:grid-cols-2 lg:gap-8 lg:grid-cols-3">
            <?php
            $the_query = new WP_Query(array(
                'posts_per_page' => -1,
                'category_name'  => 'nos-actions'
            ));
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?= get_permalink() ?>" title="<?php the_title_attribute() ?>"
                       class="group relative block bg-black rounded-button overflow-hidden">
                        <img alt="<?php the_title_attribute() ?>" src="<?= get_the_post_thumbnail_url() ?>"
                             class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
                        />

                        <div class="relative p-8">
                            <p class="text-2xl font-bold text-white"><?php the_title_attribute() ?></p>

                            <div class="mt-64">
                                <div class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                                    <p class="text-sm text-white">
                                        <?= get_the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <div class="mt-8 text-center">
            <a href="/agir-avec-nous/" class="btn btn--max btn--icon">
                <i class="fa-solid fa-plus text-white"></i>
                Agir avec nous
            </a>
        </div>
    </div>
</section>

<section class="py-12 relative bg-no-repeat bg-cover"
         style="background-image: url('https://www.jeuxetcompagnie.fr/wp-content/uploads/2018/12/enfants-et-associations.jpg')">
    <div class="bg-primary-500 absolute inset-0 bg-opacity-80"></div>
    <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8 relative z-20">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-white">Les chiffres clés de nos actions</h2>

            <p class="mt-4 text-white sm:text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores
                laborum labore provident impedit esse recusandae facere libero harum
                sequi.
            </p>
        </div>

        <div class="mt-8 sm:mt-12">
            <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
                    <dt class="order-last text-lg font-medium text-white">
                        Total Sales
                    </dt>

                    <dd class="text-4xl font-extrabold text-brand-500 md:text-5xl">
                        $4.8m
                    </dd>
                </div>

                <div
                        class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center"
                >
                    <dt class="order-last text-lg font-medium text-white">
                        Official Addons
                    </dt>

                    <dd class="text-4xl font-extrabold text-brand-500 md:text-5xl">24</dd>
                </div>

                <div
                        class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center"
                >
                    <dt class="order-last text-lg font-medium text-white">
                        Total Addons
                    </dt>

                    <dd class="text-4xl font-extrabold text-brand-500 md:text-5xl">86</dd>
                </div>
            </dl>
        </div>
    </div>
</section>

<section class="py-12 lg:py-24 bg-gray-50 text-gray-800">
    <div class="container max-w-xl px-6 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">

        <h2 class="text-center">Notre équipe</h2>
        <div class="flex flex-wrap items-stretch xl:justify-between justify-center mt-16 xl:gap-6 gap-4">
            <div class="lg:w-96 w-80">
                <img src="<?= get_template_directory_uri() ?>/assets/images/team/president.jpg"
                     class="h-72 w-full object-cover object-top rounded-t-md" alt="woman smiling"/>
                <div class="bg-white shadow-md rounded-b-md py-4 text-center">
                    <p class="text-base font-medium leading-6 text-gray-600">Mirado R.</p>
                    <p class="text-base leading-6 mt-2 text-gray-800">Président</p>
                </div>
            </div>

            <div class="bg-indigo-700 rounded-md lg:w-96 w-80 flex flex-col items-center justify-center md:py-0 py-12">
                <h3 class="text-center text-white">Une équipe et une gouvernance engagée</h3>
                <p class="lg:w-80 lg:px-0 px-4 text-base leading-6 text-center text-white mt-6">
                    Grâce à l'engagement et à l'investissement des cinq membres fondateurs, des vingtaines de
                    bénévoles dévoués et de donateurs généreux, ainsi qu'à la collaboration de nos partenaires
                    locaux, nous sommes en mesure de mettre en œuvre efficacement nos actions pour améliorer les
                    conditions de vie des enfants à travers le monde.
                </p>
            </div>

            <div class="lg:w-96 w-80">
                <img src="<?= get_template_directory_uri() ?>/assets/images/team/vice-president.jpg"
                     class="h-72 w-full object-cover object-center rounded-t-md" alt="woman in black dress"/>
                <div class="bg-white shadow-md rounded-b-md py-4 text-center">
                    <p class="text-base font-medium leading-6 text-gray-600">Nicolas B.</p>
                    <p class="text-base leading-6 mt-2 text-gray-800">Vice-Président & Trésorier</p>
                </div>
            </div>
            <div class="lg:w-96 w-80">
                <img src="https://i.ibb.co/wKq8ZCW/team-3.png"
                     class="h-72 w-full object-cover object-center rounded-t-md" alt="woman smiling"/>
                <div class="bg-white shadow-md rounded-b-md py-4 text-center">
                    <p class="text-base font-medium leading-6 text-gray-600">Marry Smith</p>
                    <p class="text-base leading-6 mt-2 text-gray-800">Writer</p>
                </div>
            </div>
            <div class="lg:w-96 w-80">
                <img src="https://i.ibb.co/TKzGPFx/team-4.png"
                     class="h-72 w-full object-cover object-center rounded-t-md" alt="woman smiling"/>
                <div class="bg-white shadow-md rounded-b-md py-4 text-center">
                    <p class="text-base font-medium leading-6 text-gray-600">John Renolds</p>
                    <p class="text-base leading-6 mt-2 text-gray-800">Developer</p>
                </div>
            </div>
            <div class="lg:w-96 w-80">
                <img src="https://i.ibb.co/Lng30RF/team-5.png"
                     class="h-72 w-full object-cover object-center rounded-t-md" alt="woman smiling"/>
                <div class="bg-white shadow-md rounded-b-md py-4 text-center">
                    <p class="text-base font-medium leading-6 text-gray-600">Annie Jackie</p>
                    <p class="text-base leading-6 mt-2 text-gray-800">Designer</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include_once(get_template_directory().'/components/cta-benevole.php'); ?>
<?php get_footer(); ?>
