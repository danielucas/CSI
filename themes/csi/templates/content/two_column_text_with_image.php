<?php 

$backdrop_color = get_sub_field('backdrop_color');
if($backdrop_color == 'custom')
	$backdrop_custom = 'style="color:'.get_sub_field('backdrop_custom').'"';

?>

<div class="row page-content page-content-two-column py-2 mb-9 position-relative backdrop backdrop-text-col backdrop-<?= $backdrop_color; ?>" <?= $backdrop_custom; ?>>
	
	<div class="col-12 col-lg-4 offset-lg-1 mt-lg-1 text-white two-column-column-one">
		<?php the_sub_field('text_one'); ?>
	</div>

	<div class="col-12 col-lg-5 offset-lg-1 mt-lg-1 mb--2 text-white two-column-column-two">
		<?php the_sub_field('text_two'); ?>

		<div class="mt-4">
			<?php get_template_part('templates/content/links'); ?>
		</div>
	</div>

	<div class="col-12 col-lg-4 offset-lg-1 mt--8 mb--6 text-white two-column-image">
		<?php get_template_part('templates/content/slider'); ?>
	</div>

</div>
