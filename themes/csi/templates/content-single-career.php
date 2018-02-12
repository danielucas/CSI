<article <?php post_class('row'); ?>>
    <header class="col-12 col-md-11 offset-md-1 mb-2">
        <h1 class="text-uppercase career-single-title"><?php the_title(); ?></h1>
    </header>
    <div class="col-12 col-md-6 offset-md-1 career-content">
        <h6 class="text-subtitle">Position Description</h6>
        <?php the_content(); ?>
    </div>
    <sidebar class="col-12 col-md-3 offset-md-1 career-apply">
        <h6 class="text-subtitle">How To Apply</h6>
        <p>To Apply send a Resume &amp; Cover Letter to:</p>
        <p><?= getObfuscatedEmailLink(get_field('career_contact'), array('class'=>'text-primary btn-link')) ?></p>
    </sidebar>
</article>