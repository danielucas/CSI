<?php if($highlights = get_sub_field('highlights')): $i=0; ?>
<div class="row mb-md-4 mb-2 text-center featured-content featured-highlights">
	<div class="col-12 col-md-10 offset-md-1">
		<div class="row">

		<?php foreach($highlights as $highlight): $i++; ?>
			<div class="col-4 col-md-4 px-md-4 text-center">
				<a href="<?= $highlight['highlight']; ?>" class="d-inline-block mb-md-2 mb-1 featured-highlight-image" style="background-image: url(<?= $highlight['image']['url'] ?>);" ></a>
				<h5 class="font-weight-bold"><a href="<?= $highlight['highlight']; ?>" class="text-uppercase text-medium"><?= $highlight['title']; ?></a></h5>
			</div>

		<?php endforeach; ?>

		</div>
	</div>

</div>
<?php endif; ?>