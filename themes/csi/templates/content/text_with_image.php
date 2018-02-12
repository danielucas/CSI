<?php 

$backdrop_color = get_sub_field('backdrop_color');
if($backdrop_color == 'custom')
	$backdrop_custom = 'style="color:'.get_sub_field('backdrop_custom').'"';

 ?>

<div class="row page-content page-content-text-with-image">

	<div class="col-12 col-sm-6 col-lg-4 text-with-image-header">
		<h6 class="mt-md-3 text-subtitle"><?= get_sub_field('subtitle') ?></h6>
		<div class="mb-2"><?php the_sub_field('text'); ?></div>
		<?php get_template_part('templates/content/links'); ?>
	</div>

	<div class="col-12 col-sm-6 col-lg-8 px-lg-4 text-with-image-image">
		<div class="position-relative backdrop backdrop-<?= $backdrop_color; ?>" <?= $backdrop_custom; ?>>
			<?php get_template_part('templates/content/slider'); ?>	
		</div>
	</div>

</div>