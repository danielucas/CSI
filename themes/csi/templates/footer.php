<footer class="site-footer mt-md-5 pt-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 order-sm-1 col-sm-6 col-lg-4 mb-1 pr-md-3 footer-contact-form">
				<?php get_template_part('templates/forms/contact-form') ?>
			</div>

			<ul class="col-12 order-sm-3 order-lg-2 col-lg-4 mb-1 list-unstyled footer-locations-list">
				<?php get_template_part('templates/footer/locations', 'list'); ?>
			</ul>

			<div class="col-12 order-sm-2 order-lg-3 col-sm-6 col-md-4 col-lg-3 mb-1 footer-get-involved">
				<?php get_template_part('templates/footer/get', 'involved'); ?>
			</div>
		</div>
	</div>
	<?php get_template_part('templates/footer/locations', 'map'); ?>
</footer>