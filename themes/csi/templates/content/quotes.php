<div class="row pt-4 page-content page-content-quotes">
	<div class="col-12 col-md-2 offset-md-1">
		<h6 class="mt-1 text-subtitle text-uppercase"><?php the_sub_field('subtitle'); ?></h6>
	</div>

	<div class="col-12 col-md-8 col-lg-6 content-quotes">
		<?php if($quotes = get_sub_field('quotes')): foreach($quotes as $quote): ?>
			<div class="d-inline-block w-100 content-quote slide text-medium">
				<h3 class="h2 mb-2">"<?= $quote['quote']; ?>"</h3>
				<p>&mdash; <?= $quote['attribution']; ?></p>
			</div>
		<?php endforeach; endif; ?>
	</div>

</div>