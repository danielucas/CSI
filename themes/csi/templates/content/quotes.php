<?php 

$text_color = 'purple';
$text_color = get_field('project_color');
if($text_color == 'custom')
	$text_color_custom = 'style="color:'.get_field('project_color_custom').'"';

?>

<div class="row page-content page-content-quotes">
	<div class="col-12 col-md-2 offset-md-1">
		<h6 class="mt-1 text-subtitle text-uppercase"><?php the_sub_field('subtitle'); ?></h6>
	</div>

	<div class="col-12 col-md-8 col-lg-6 content-quotes">
		<?php if($quotes = get_sub_field('quotes')): foreach($quotes as $quote): ?>
			<div class="d-inline-block w-100 content-quote slide text-<?= $text_color; ?>" <?= $text_color_custom; ?>>
				<h3 class="h2 mb-2">"<?= $quote['quote']; ?>"</h3>
				<p>&mdash; <?= $quote['attribution']; ?></p>
			</div>
		<?php endforeach; endif; ?>
	</div>

</div>