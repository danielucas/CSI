<div class="row position-relative featured-content featured-content-map bg-cyan">

	<div id="featured-map" class="position-absolute bg-cyan featured-map"></div>

	<div class="featured-map-locations d-none">
		<?php foreach(csi_get_all_locations() as $location): ?>
			<pre><?php print_r($location); ?></pre>
			<span class="d-none featured-map-marker" data-icon="<?= get_template_directory_uri() . '/dist/images/_svg/map-icon-1.svg'; ?>" data-lat="<?= $location['address']['lat']; ?>" data-lng="<?= $location['address']['lng']; ?>"><div class="bg-white p-2 text-center"><strong class="text-uppercase font-weight-bold"><?= $location['title'] ?></strong><h5><?= $location['desc']; ?></h5></div></span>
		
		<?php endforeach; ?>
	</div>

	<div class="position-absolute col-12 col-sm-6 col-lg-5 offset-sm-1 featured-map-header">
		<h6 class="mt-md-3 mb-md-9 text-subtitle text-white"><?= get_sub_field('subtitle') ?></h6>
		<div class="mb-2 text-white"><?php the_sub_field('text'); ?></div>
		<?php get_template_part('templates/content/links'); ?>
	</div>

</div>	
