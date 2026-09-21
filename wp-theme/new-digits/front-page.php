<?php
/**
 * Startpagina. Wordt gebruikt zodra de voorpagina is ingesteld
 * (Instellingen > Lezen), of als er geen statische pagina is gekozen.
 */
get_header();
?>

<section class="hero">
	<h1>Welkom bij <?php bloginfo( 'name' ); ?></h1>
	<p><?php bloginfo( 'description' ); ?></p>
	<a class="button" href="#contact">Neem contact op</a>
</section>

<?php while ( have_posts() ) : the_post(); ?>
	<?php if ( get_the_content() ) : ?>
		<section class="section">
			<?php the_content(); ?>
		</section>
	<?php endif; ?>
<?php endwhile; ?>

<section id="contact" class="section">
	<h2>Contact</h2>
	<p>E-mail: <a href="mailto:tim@newdigits.nl">tim@newdigits.nl</a></p>
</section>

<?php
get_footer();
