<?php get_header(); ?>

<?php get_header('page') ?>

<?php
if (in_category('nos-actions')) {
    get_template_part('template-parts/content', 'nos-actions');
} else {
    get_template_part('template-parts/content', 'single');
}
?>

<?php get_footer(); ?>