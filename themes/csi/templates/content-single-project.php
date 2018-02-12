<?php if (have_rows('project_content')): ?>

    <div class="w-100 page-content-container">

        <?php

        get_template_part('templates/project/intro');

        while ( have_rows('project_content') ) : the_row();

            get_template_part( 'templates/content/'.get_row_layout() );

        endwhile;

        ?>

    </div>

<?php endif; ?>