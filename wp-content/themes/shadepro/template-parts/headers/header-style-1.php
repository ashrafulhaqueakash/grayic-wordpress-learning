<?php
global $shadepro;
$has_site_logo =   (!empty(shadepro_get_site_logo())) ? 'has-site-logo' : '';
?>
<header class="shadepro-header-area header-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="shadepro-header-wrap">
                    <div class="site-branding <?php echo esc_attr($has_site_logo)  ?>">
                        <a href="<?php echo esc_url(home_url()) ?>">
                            <?php
                            printf("%s", shadepro_get_site_logo());
                            ?>
                        </a>
                    </div><!-- .site-branding -->
                    <div class="shadepro-menu-wrap">
                        <div class="shadepro-main-menu-wrap navbar">
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- end of Nav toggler -->
                            <div class="navbar-inner">
                                <div class="shadepro-mobile-menu"></div>
                                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <nav id="site-navigation" class="main-navigation ">
                                    <?php
                                    if (has_nav_menu('main-menu')) {
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'main-menu',
                                                'menu_class' => 'navbar-nav',
                                                'menu_id' => 'navbar-nav',
                                                'container_class' => 'shadepro-menu-container'
                                            )
                                        );
                                    }

                                    ?>
                                </nav><!-- #site-navigation -->
                            </div>
                        </div>
                    </div>
                    <?php if (!empty(shadepro_get_header_buttons())) : ?>
                        <div class="shadepro-login-btn-wrap d-none d-md-block d-lg-block">
                            <?php echo shadepro_get_header_buttons(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>