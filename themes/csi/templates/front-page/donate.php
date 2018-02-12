<?php 

$backdrop_color = get_sub_field('backdrop_color');
if($backdrop_color == 'custom')
	$backdrop_custom = 'style="color:'.get_sub_field('backdrop_custom').'"';

?>

<div class="row mb-2 mb-md-4 featured-content featured-donate">
	
	<div class="col-12 col-md-10 offset-md-1 position-relative backdrop backdrop-donate-block backdrop-<?= $backdrop_color; ?>" <?= $backdrop_custom; ?>>
		<a href="<?= get_sub_field('donate_link') ?>" target="_blank" class="btn btn-lg btn-block py-2">
			<?= get_sub_field('donate_text'); ?>
		</a>
	</div>

</div>