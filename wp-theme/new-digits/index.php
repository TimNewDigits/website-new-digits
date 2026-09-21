<?php
/**
 * Standaard template (o.a. voor het blog-overzicht en berichten).
 */
get_header();
?>

<div class="entry">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php if ( is_singular() ) : ?>
					<?php the_content(); ?>
				<?php else : ?>
					<?php the_excerpt(); ?>
				<?php endif; ?>
			</article>
		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<p>Er is niets gevonden.</p>
	<?php endif; ?>
</div>

<?php
get_footer();
