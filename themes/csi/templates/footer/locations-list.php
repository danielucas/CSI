<?php 

$locations = get_field('location', 'option');

if($locations):
	$i = 0;

?>
<h6 class="text-subtitle mb-2">Visit Us</h6>
	<div class="row">
	<?php foreach($locations as $location): $i++; ?>
		<li class="col-12 col-sm-6 col-lg-12 footer-location mb-2">
			<span class="location-icon w-1"><?= print_svg('map-icon-'.$i); ?></span>
			<h4 class="font-weight-light pr-lg-50 pr-md-25 mb-1 location-address">
				<?= $location['address']['address']; ?>
				<span class="d-none map-marker" data-icon="<?= get_template_directory_uri() . '/dist/images/_svg/map-icon-'.$i.'.svg'; ?>" data-lat="<?= $location['address']['lat']; ?>" data-lng="<?= $location['address']['lng']; ?>"></span>
			</h4>
			<?php if($location['email_contacts']):?>
				<h6 class="text-subtitle mb-1">Email Contacts</h6>
				<?php foreach($location['email_contacts'] as $email): ?>
					<p class="font-weight-light mb-0 text-med text-uppercase location-email">
						<?= $email['title'] ?>: <?= getObfuscatedEmailLink($email['email']); ?>
				</p>
				<?php endforeach; ?>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</div>

<?php endif; ?>