<div class="row page-content page-content-stats">
	<div class="col-12 mb-2 text-center">
		<h6 class="mt-md-4 text-subtitle text-uppercase"><?php the_sub_field('subtitle'); ?></h6>
	</div>
	

	<div class="col-12 text-center content-stats">
		<?php if($stats = get_sub_field('stats')): foreach($stats as $stat): ?>
			<div class="d-inline-block bg-purple text-white p-2 mx-3 content-stat stat-<?= $stat['number_type'];?>">
				
				<?php if($stat['number_type'] == 'percent'): ?>
					<svg id="stat-chart" class="mb-1" viewbox="0 0 36 36"><path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#eee"; stroke-width="3.9"; stroke-dasharray="100, 100" /><path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#444"; stroke-width="4"; stroke-dasharray="<?= $stat['number']; ?>, 100" /></svg>
				<?php endif; ?>

				<h2 class="display-4 mb-2 stat-<?= $stat['number_type'];?>-number"><?= $stat['number'] . ( ($stat['number_type'] == 'percent') ? '%' : '' ); ?></h2>
				<h2 class="font-weight-light"><?= $stat['description']; ?></h2>
			</div>
		<?php endforeach; endif; ?>
	</div>

</div>