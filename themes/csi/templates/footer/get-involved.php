<?php 

$getID = getIdBySlug('get-involved'); 
$getCTA = get_field('get_involved_cta', $getID);

?>

<h6 class="text-subtitle mb-2">Get Involved</h6>
<h3 class="font-weight-light mb-2 text-blue"><?= $getCTA; ?></h3>

<a href="<?= get_permalink($getID); ?>" class="btn bg-purple w-100 mb-12 text-white text-uppercase">Volunteer</a>
<a href="https://publicgood.com/org/child-steps-international-inc-beltsville-md-461052332" target="_blank" class="btn bg-orange w-100 mb-12 text-white text-uppercase">Donate</a>