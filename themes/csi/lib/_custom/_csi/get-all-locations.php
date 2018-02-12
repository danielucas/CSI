<?php 

function csi_get_all_locations() {

	$allLocations = get_transient( 'csi_all_locations' );

	if(!$allLocations) {

		$allLocations = [];

		$projects = get_posts(array('post_type'=>'project', 'post_status'=>'publish', 'posts_per_page'=>-1));

		if($projects) {
			foreach($projects as $project) {
				$locations = [];

				$thisLocations = get_field('project_locations', $project->ID);

				if($thisLocations) {

					foreach($thisLocations as $tl) {
						$allLocations[] = [
							'title'		=> $project->post_title,
							'desc' 		=> $tl['description'],
							'address' 	=> $tl['location']
						];
					}

				}

			}
		}

		set_transient( 'csi_all_locations', $allLocations, 12 * HOUR_IN_SECONDS );

	}

	return $allLocations;
}

add_action('init', 'csi_get_all_locations');