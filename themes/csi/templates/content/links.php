<?php $linkCount = ['1'=>'bg-purple-light', '2'=>'bg-orange-light', '3'=>'bg-blue-light']; ?>
<?php if($links = get_sub_field('links')): $i=0; foreach($links as $link): $i++; ?>
		<a href="<?= $link['link_to'];  ?>" class="small py-1 px-1 text-white text-uppercase <?= $linkCount[$i]; ?>"><?= $link['title']; ?></a>
<?php endforeach; endif; ?>