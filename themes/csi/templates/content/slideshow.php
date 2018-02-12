<?php 

$backdrop_color = get_sub_field('backdrop_color');
if($backdrop_color == 'custom')
	$backdrop_custom = 'style="color:'.get_sub_field('backdrop_custom').'"';

$offset 	= 'offset-lg-1';
$subtitle 	= get_sub_field('subtitle');
if(! $subtitle) $offset = 'offset-lg-2';

 ?>

<div class="row page-content page-content-slideshow">
	<div class="col-12 col-sm-6 col-lg-8 <?= $offset; ?> order-2 order-md-1 content-slideshow">
		<div class="position-relative backdrop backdrop-<?= $backdrop_color; ?>" <?= $backdrop_custom; ?>>
			<?php get_template_part('templates/content/slider'); ?>	
		</div>
	</div>
	
	<?php if($subtitle): ?>
		<div class="col-12 col-sm-6 col-lg-2 offset-lg-1 mt-lg-4 order-1 order-md-2 slideshow-header">
			<h6 class="text-subtitle"><?php the_sub_field('subtitle'); ?></h6>
		</div>
	<?php endif; ?>

</div>