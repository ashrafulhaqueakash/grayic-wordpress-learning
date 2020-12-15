<?php
// File Security Check
if (!defined('ABSPATH')) {
	exit;
}



/* Theme demo data setup */
function shadepro_import_files()
{
    return array(
        array(
            'import_file_name' => 'Initial Setup',
            'categories' => array('Inner Pages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/inner-content.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/screenshot.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/',
        ),
        array(
            'import_file_name' => 'ECommerce',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/ecommerce.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/ecommerce.jpg',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/',
        ),
        array(
            'import_file_name' => 'Sass Subscription',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/sass.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/sass.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/sass-subscription',
        ),
        array(
            'import_file_name' => 'Video Conference',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/video-conference.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/video.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/video-conference',
        ),
        array(
            'import_file_name' => 'Web Application',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/web.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/web.jpg',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/web-application',
        ),
        array(
            'import_file_name' => 'Job Site',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/job-site.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/job-site.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/job-site',
        ),
        array(
            'import_file_name' => 'Mobile App',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/mobile-app.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/mobile-app.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/mobile-app',
        ),
        array(
            'import_file_name' => 'Product Landing',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/product-landing.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/product-landing.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/product-landing',
        ),
        array(
            'import_file_name' => 'Telemedicine',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/telemedicine.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/telemedicine.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/telemedicine',
        ),
        array(
            'import_file_name' => 'B2B',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/b2b.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/b2b.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/b2b',
        ),
        array(
            'import_file_name' => 'Consultation',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/consultation.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/consultation.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/consultation',
        ),
        array(
            'import_file_name' => 'Coworking',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/coworking.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'shadepro',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/shadepro/inc/demo-contents/previews/coworking.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'shadepro'),
            'preview_url' => 'http://uxtheme.net/demos/wp/shadepro/coworking',
        ),

    );
}
add_filter('pt-ocdi/import_files', 'shadepro_import_files');


function ocdi_after_import($selected_import)
{

    $front_page_id = get_page_by_title('Agency');

    if ('ECommerce' === $selected_import['import_file_name']) {
        // Assign front page and posts page (blog page).
        $front_page_id = get_page_by_title('ECommerce');
    } elseif ('Sass Subscription' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Sass Subscription');
    } elseif ('Video Conference' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Video Conference');
    } elseif ('Web Application' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Web Application');
    }elseif ('Coworking' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Coworking');
    }elseif ('Consultation' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Consultation');
    }elseif ('B2B' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('B2B');
    }elseif ('Job Site' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Job Site');
    }elseif ('Mobile App' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Mobile App');
    }elseif ('Product Landing' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Product Landing');
    }elseif ('Telemedicine' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Telemedicine');
    }else{
        $front_page_id = get_page_by_title('ECommerce');
    }

    $main_menu = get_term_by('name', 'Main Menu', 'nav_menu');
    set_theme_mod('nav_menu_locations', array(
        'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
    ));
    $blog_page_id  = get_page_by_title('Blog');
    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
    update_option('page_for_posts', $blog_page_id->ID);

    update_option('elementor_scheme_color', array('#161c2d', '#161c2d', '#6E727D', '#473bf0'));
    $elem_clear_cache = new\Elementor\Core\Files\Manager();
    $elem_clear_cache->clear_cache();
}
add_action('pt-ocdi/after_import', 'ocdi_after_import');
