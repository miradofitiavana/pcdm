<?php get_header(); ?>

<main>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
            </article>
		<?php endwhile; ?>
	<?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'pcdm' ); ?></p>
	<?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
