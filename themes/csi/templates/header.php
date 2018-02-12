<header class="site-banner py-1 bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-2 col-lg-3 branding">
                <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?= print_svg('logo'); ?></a>
            </div>

            <nav class="d-none d-md-flex col-md-10 col-lg-9 pt-1 font-family-sans text-uppercase nav-primary">
                <?php if (has_nav_menu('primary_navigation')): wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav justify-content-end w-100 ls-1']); endif; ?>
            </nav>

        </div>

    </div>
</header>
