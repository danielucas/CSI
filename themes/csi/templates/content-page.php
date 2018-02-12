<?php if (have_rows('project_content')): ?>

    <div class="w-100 page-content-container">

        <?php

        while ( have_rows('project_content') ) : the_row();

        	$count++;

            get_template_part( 'templates/content/'.get_row_layout() );

        endwhile;

        ?>

    </div>

<?php endif; ?>