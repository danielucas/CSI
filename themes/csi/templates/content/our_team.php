<div class="row page-content page-content-our-team">

	<div class="col-12 col-sm-6 col-lg-7 order-2 order-sm-1 our-team-wrapper">
		<?php get_template_part('templates/content/team-list'); ?>
	</div>

	<div class="col-12 col-sm-6 mb-3 mb-md-1 col-lg-4 order-1 order-sm-2 our-team-text">
		<h6 class="text-subtitle"><?php the_sub_field('subtitle'); ?></h6>
		<?php the_sub_field('description'); ?>
	</div>

</div>