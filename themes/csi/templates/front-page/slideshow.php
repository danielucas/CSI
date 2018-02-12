<?php 

$slides = get_sub_field('slider');

if($slides): ?>

<div class="row featured-content mb-4 featured-slider">

	<ul class="col-12 list-unstyled slides featured-slides">
		<?php 
			foreach($slides as $slide): 

			$link = $slide['link'];

			$backdrop_color 	= $slide['backdrop_color'];
			if($backdrop_color == 'custom')
				$backdrop_custom = 'style="color:'.$slide['backdrop_custom'].'"';

			?>

			<li class="pr-md-4 slide featured-slide">

				<div class="position-relative featured-backdrop backdrop backdrop-<?= $backdrop_color; ?>" <?= $backdrop_custom; ?>">
					<?= ($link ? '<a href="'.$slide['link'].'" class="slide-wrap-link"></a>' : ''); ?>
					
					<div class="mb-1 featured-slide-image">
						<img src="<?= $slide['image']['url']; ?>" alt="" class="img-fluid">
					</div>

					<div class="position-absolute text-right featured-slide-header">
						<p class="h4 font-weight-bold"><?= $slide['subtitle']; ?></p>
						<h1 class="font-weight-bold featured-slide-title"><?= $slide['title']; ?></h1>
						<?php if($link): ?>
							<a href="<?= $link; ?>" class="d-none d-md-inline-block text-uppercase btn" style="background-color: <?= ($slide['backdrop_color'] !== 'custom' ? 'var(--'.$slide['backdrop_color'].')' : $slide['backdrop_custom']) ?>"><?= $slide['link_title']; ?></a>
						<?php endif; ?>
					</div>

				</div>				

			</li>

		<?php endforeach; ?>

	</ul>

</div>

<?php endif; ?>