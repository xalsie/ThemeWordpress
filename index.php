<?php get_header() ?>

<main id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-11">
				<h1 class="title title--page title--page--homepage">
					A really professional structure for all your events!
				</h1>
			</div>
		</div>
	</div>
	<?php if ($homepage_image = get_theme_mod('homepage_image')) : ?>
		<div class="d-flex justify-content-end">
			<img src="<?php echo esc_url($homepage_image); ?>">
		</div>
	<?php endif; ?>
	<div class="section--md m-auto margin--section">
		<h2 class="title title--section">About Us</h2>
		<p class="base-text-content">
			Specializing in the creation of exceptional events for private and corporate clients, we design,
			plan and manage every project from conception to execution. 
		</p>
	</div>

	<?php get_template_part('template-parts/who-are-we'); ?>
	<h1 class="container title title--section">Our Services</h1>
	<?php get_template_part('template-parts/services-images'); ?>
	<div class="container">
		<h1 class="title title--section">Our Partners</h1>
		<?php get_template_part('template-parts/our-partners'); ?>
	</div>
</main>

<?php get_footer() ?>
