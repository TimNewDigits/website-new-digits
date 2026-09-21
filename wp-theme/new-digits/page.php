<?php
/**
 * Template voor losse pagina's.
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class( 'entry' ); ?>>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>

<?php
get_footer();
