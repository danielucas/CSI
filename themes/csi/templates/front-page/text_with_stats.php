<?php 

$backdrop_color = get_sub_field('backdrop_color');
if($backdrop_color == 'custom')
	$backdrop_custom = 'style="color:'.get_sub_field('backdrop_custom').'"';

?>

<div class="row mb-4 featured-content featured-content-text-with-image">

	<div class="col-12 col-sm-6 col-lg-3 offset-lg-1 text-with-image-header">
		<h6 class="mt-lg-3 text-subtitle"><?= get_sub_field('subtitle') ?></h6>
		<div class="mb-2"><?php the_sub_field('text'); ?></div>
	</div>

	<div class="col-12 col-sm-6 col-lg-7 px-lg-4 text-with-image-image">
		<div class="position-relative backdrop backdrop-<?= $backdrop_color; ?>" <?= $backdrop_custom; ?>>
			<?php get_template_part('templates/content/slider'); ?>	
		</div>
	</div>

	<div class="col-12 col-lg-11 offset-lg-1 mt-lg--2 text-center text-lg-left content-stats featured-content-stats">
		<?php if($stats = get_sub_field('stats')): foreach($stats as $stat): ?>
			<div class="d-inline-block bg-purple text-center text-white p-2 mx-1 ml-md-0 mr-md-3 ml-md--2 content-stat stat-<?= $stat['number_type'];?>">
				
				<?php if($stat['number_type'] == 'percent'): ?>
					<svg id="stat-chart" class="mb-1" viewbox="0 0 36 36"><path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#eee"; stroke-width="3.9"; stroke-dasharray="100, 100" /><path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#444"; stroke-width="4"; stroke-dasharray="<?= $stat['number']; ?>, 100" /></svg>
				<?php endif; ?>

				<h2 class="display-4 mb-2 stat-<?= $stat['number_type'];?>-number"><?= $stat['number'] . ( ($stat['number_type'] == 'percent') ? '%' : '' ); ?></h2>
				<h2 class="font-weight-light"><?= $stat['description']; ?></h2>
			</div>
		<?php endforeach; endif; ?>
	</div>

</div>