<div class="row page-content page-content-video">
	<div class="col-12 col-md-2">
		<h6 class="mt-1 text-subtitle text-uppercase"><?php the_sub_field('subtitle'); ?></h6>
	</div>

	<div class="col-12 col-md-8 order-2 order-md-1 content-quotes">
		<?= hair_video_embed(get_sub_field('video_embed')); ?>
	</div>

</div>