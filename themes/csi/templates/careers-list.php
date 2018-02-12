<?php 

$careers = get_posts(array('post_type'=>'career', 'posts_per_page'=>-1,'post_status'=>'publish'));

if($careers): ?>

	<ul class="list-unstyled row mb-2 mb-md-4 careers-list">
		<h6 class="col-12 text-subtitle">Careers</h6>

		<?php 
			
			foreach($careers as $post): setup_postdata( $post );
		
			get_template_part('templates/content', 'career');
		
			endforeach; 

			wp_reset_postdata(); 

		?>

	</ul>

<?php endif; ?>