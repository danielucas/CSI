<?php while (have_posts()): the_post(); ?>

    <?php if (have_rows('featured_content')): ?>

        <div class="featured-items">

            <?php

            while ( have_rows('featured_content') ) : the_row();

                get_template_part( 'templates/front-page/'.get_row_layout() );

            endwhile;

            ?>

        </div>

    <?php endif; ?>

<?php endwhile; ?>
