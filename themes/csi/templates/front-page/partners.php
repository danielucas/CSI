<div class="row featured-partners py-2 position-relative backdrop backdrop-purple backdrop-text-col">
	
	<div class="col-12 col-lg-11 offset-lg-1">
		<h6 class="mb-lg-2 text-subtitle text-white"><?= get_sub_field('subtitle') ?></h6>
	</div>

	<div class="col-12 col-lg-4 offset-lg-1 mt-lg-1 text-white featured-partners-col-one">
		<?php the_sub_field('text'); ?>
	</div>

	<div class="col-12 col-lg-5 offset-lg-1 mt-lg-1 mb--2 text-white featured-partners-col-two">
		<?php the_sub_field('text_col_2'); ?>

		<div class="mt-4">
			<?php get_template_part('templates/content/links'); ?>
		</div>
	</div>

	<div class="col-12 col-lg-10 offset-lg-1 bg-white p-2 mt-4 mb-md--4 text-center featured-partners-list">
		<?php if($partners = get_sub_field('partners')): ?>
			<div class="w-100 text-center">
			<?php foreach($partners as $partner): ?>
				<div class="d-inline-block pb-2 mx-1 featured-partners-partner">
					<?= ($partner['link'] ? '<a href="'.$partner['link'].'">' : ''); ?>
					<img src="<?= $partner['logo']['sizes']['large'] ?>" alt="" class="img-fluid">
					<?= ($partner['link'] ? '</a>' : ''); ?>
				</div>
			<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>

</div>
