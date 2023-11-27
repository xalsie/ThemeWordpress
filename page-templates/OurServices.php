<?php /* Template Name: OurServices */
	get_header()
?>

<main id="site-content">
	<h1 class="container title title--section">Our Services</h1>
	<?php get_template_part('template-parts/services-images'); ?>

	<h1 class="title title--page container"><?php the_title() ?>.</h1>
	<div class="our-services--content">
		<?php the_content(); ?>
	</div>
	<div>
	<?php if (has_post_thumbnail()): ?>
		<div class="d-flex justify-content-center">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>
	</div>
</main>

<?php get_footer() ?>
