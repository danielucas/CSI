<?php
/**
 * Template Name: Get Involved Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="row mt-lg-2">
		<div class="col-12 col-md-6 col-lg-5 offset-lg-1 mb-2 mb-md-4 get-involved-text">
			<?php get_template_part('templates/content', 'getinvolved'); ?>
		</div>

		<div class="col-12 col-md-6 col-lg-5 mb-2 mb-md-4 get-involved-form">
			<?php get_template_part('templates/forms/get-involved'); ?>
		</div>

		<div class="col-12 col-md-10 offset-lg-1 get-involved-careers">
			<?php get_template_part('templates/careers', 'list'); ?>
		</div>
	</div>
<?php endwhile; ?>
