<?php 

$teamTerms = get_terms( array('taxonomy'=>'team-level' ));

if($teamTerms):

	foreach($teamTerms as $term): ?>

		<ul class="row mb-4 list-unstyled team-list">
			<h6 class="col-12 text-subtitle"><?= $term->name; ?></h6>
		

		<?php $members = get_posts(array('post_type'=>'team', 'team-level'=>$term->name, 'post_status'=>'publish'));

			if($members):

				foreach($members as $member): ?>

				<li class="col-6 col-md-4 team-member" data-member-id="<?= $member->ID; ?>">
					<div class="pb-100 mb-12 team-member-img" style="background-image: url(<?= get_the_post_thumbnail_url($member->ID, 'medium', array('class'=>'img-fluid') ); ?>)"></div>
					<p><strong><?= $member->post_title; ?></strong><br><?= get_field('member_role', $member->ID); ?></p>
				</li>

				<?php endforeach;

			endif; ?>

		</ul>

	<?php 

		endforeach;

endif;

?>