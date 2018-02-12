<?php 

$backdrop_color = get_field('project_color');
if($backdrop_color == 'custom')
	$backdrop_custom = 'style="color:'.get_field('project_color_custom').'"';

?>

<div class="mb-4 position-relative backdrop backdrop-<?= $backdrop_color; ?>" <?= $backdrop_custom; ?>>

	<div class="d-inline-block slider w-100">
		<div class="slides">
			<?php foreach(get_field('project_slideshow') as $image): ?>
				
				<li class="slide">
					<img src="<?= $image['url']; ?>" alt="" class="img-fluid">
				</li>

			<?php endforeach; ?>
		</div>
	</div>

</div>