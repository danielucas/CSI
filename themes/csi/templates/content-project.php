<?php 

$project_color = get_field('project_color');
if($project_color == 'custom') {
	$project_color_custom = 'style="color:'.get_field('project_color_custom').'"';
	$backdrop_custom = 'style="background-color:'.get_field('project_color_custom').'"';
}

?>
<article <?php post_class('row mt-2'); ?>>
	<header class="col-12 col-md-5 col-lg-4 order-2 order-md-1 content-project-header">
		<div class="mt-md-4 mt-1 mb-1 p-1 text-<?= $project_color; ?>" <?= $project_color_custom; ?>>
			<h2 class="display-4 mb-2 font-weight-bold text-uppercase content-project-title"><?php the_title(); ?></h2>
			<p class="h4 m-0 font-weight-light content-project-excerpt"><?= get_the_excerpt(); ?></p>
		</div>
		<a href="<?php the_permalink(); ?>" class="btn btn-medium text-uppercase ml-md-1">Learn More &rarr;</a>
	</header>
	<div class="col-12 col-md-7 col-lg-7 order-1 order-md-2 content-project-image">
		<div class="position-relative backdrop backdrop-<?= $project_color; ?>" <?= $backdrop_custom; ?>><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array('class' => 'img-fluid') ) ?></a>
		</div>
	</div>
</article>
