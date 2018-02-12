<div class="d-inline-block slider w-100">
	<div class="slides">
		<?php foreach(get_sub_field('images') as $image): ?>
			
			<li class="slide">
				<img src="<?= $image['url']; ?>" alt="" class="img-fluid">
			</li>

		<?php endforeach; ?>
	</div>
</div>