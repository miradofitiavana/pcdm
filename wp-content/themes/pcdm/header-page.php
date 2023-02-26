<?php
$currentPageID = get_queried_object_id();
$image         = wp_get_attachment_image_src(get_post_thumbnail_id($currentPageID), 'single-post-thumbnail');
?>

<section style="background-image: url('<?php echo $image[0]; ?>')"
         class="relative bg-cover bg-no-repeat lg:pt-[84px] lg:pb-[110px]">
    <div class="w-full relative xl:px-0 py-12 z-30">
        <div class="relative z-10 container mx-auto">
            <div role="contentinfo" class="w-full h-full text-center">
                <h1 tabindex="0" class="text-white text-4xl lg:text-6xl font-black mb-8"><?= get_the_title() ?></h1>
                <div class="breadcrumb text-white text-sm lg:text-base"><?php get_breadcrumb(); ?></div>
            </div>
            <div class="w-full lg:w-1/2 h-full lg:pr-10 xl:pr-0">
            </div>
        </div>
    </div>
    <div class="bg-opacity-40 absolute inset-0 z-20 bg-black"></div>
</section>