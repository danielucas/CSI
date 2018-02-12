<?php 

$project_color = get_field('project_color');
if($project_color == 'custom')
	$project_color_custom = 'style="color:'.get_field('project_color_custom').'"';

?>

<div class="row project-intro">
	
	<div class="col-12 col-md-6 col-lg-4 mt-md-5 mb-md-4 mb-2 order-2 order-md-1 project-header text-uppercase">
		<div class="w-100 p-2 mb-1 text-<?= $project_color; ?>" <?= $project_color_custom; ?>>
			<h6>CSI Program</h6>
			<h1 class="display-4 font-weight-bold"><?php the_title(); ?></h1>
		</div>
		<?php if($pdf = get_field('project_pdf')): ?>
			<a href="<?= $pdf['url']; ?>" class="ml-2 btn btn-medium">Download Report</a>
		<?php endif; ?>
	</div>

	<div class="col-12 col-md-6 col-lg-8 mb-md-4 mb-2 order-1 order-md-2 project-intro-slideshow">
		<?php get_template_part('templates/project/intro', 'slider'); ?>		
	</div>

	<div class="col-12 col-md-2 order-3">
		<h6 class="mt-md-4 text-subtitle text-uppercase">Overview</h6>
	</div>

	<div class="col-12 col-md-10 col-lg-8 mb-2 mb-lg-4 order-4">
		<h3 class="text-<?= $project_color; ?>" <?= $project_color_custom; ?>><?php the_content(); ?></h3>
	</div>

</div>