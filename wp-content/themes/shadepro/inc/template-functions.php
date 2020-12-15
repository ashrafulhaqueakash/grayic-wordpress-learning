<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package shadepro
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function shadepro_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'shadepro_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function shadepro_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'shadepro_pingback_header');

function shadepro_dd($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

/**
 * Detect Homepage
 *
 * @return boolean value
 */
function shadepro_detect_homepage()
{
    // If front page is set to display a static page, get the URL of the posts page.
    $homepage_id = get_option('page_on_front');

    // current page id
    $current_page_id = (is_page(get_the_ID())) ? get_the_ID() : '';

    if ($homepage_id == $current_page_id) {
        return true;
    } else {
        return false;
    }
}

/**
 *   Get the site logo for Bufet
 *
 */

function shadepro_get_site_logo()
{
    $logo = '';
    $shadepro = get_option('shadepro');
    $logo_url = '';

    $custom_logo = get_post_meta(get_the_ID(), 'use_custom_logo', true);
    $page_logo = get_post_meta(get_the_ID(), 'select_logo', true);

    if (!empty($custom_logo)) {
        $img_url = wp_get_attachment_image_src($page_logo, 'full');
        $logo_url = esc_url($img_url[0]);
        $logo = '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('title')) . '" class="navbar-brand__regular">';
    } else if (!empty($shadepro['logo']['url'])) {
        $logo_url = esc_url($shadepro['logo']['url']);
        $logo = '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('title')) . '" class="navbar-brand__regular">';
    } else {
        if (has_custom_logo()) {
            $core_logo_id = get_theme_mod('custom_logo');
            $logo_url = wp_get_attachment_image_src($core_logo_id, 'full');

            $logo = '<img src="' . esc_url($logo_url[0]) . '" alt="' . esc_attr(get_bloginfo('title')) . '" class="navbar-brand__regular">';
        } else {
            $logo = '<h1 class="navbar-brand__regular">' . get_bloginfo('name') . '</h1>';
        }
    }

    return $logo;
}

/**
 * Get the site logo for Bufet
 */
function shadepro_get_site_sticky_logo()
{

    $shadepro = get_option('shadepro');

    $logo = '';
    $logo_url = '';

    $custom_logo = get_post_meta(get_the_ID(), 'use_custom_logo', true);
    $page_sticky_logo = get_post_meta(get_the_ID(), 'select_sticky_logo', true);

    if (!empty($custom_logo) && $page_sticky_logo) {
        $img_url = wp_get_attachment_image_src($page_sticky_logo, 'full');
        $logo_url = esc_url($img_url[0]);
        $logo = '<img src="' . esc_url($logo_url) . ' ?>" alt="' . esc_attr(get_bloginfo('title')) . '" class="navbar-brand__sticky">';
    } else if (!empty($shadepro['sticky_logo']['url'])) {
        $logo_url = esc_url($shadepro['sticky_logo']['url']);
        $logo = '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('title')) . '" class="navbar-brand__sticky">';
    }
    return $logo;
}
/**
 * Get header buttons
 */
function shadepro_get_header_buttons()
{

    $shadepro = get_option('shadepro');

    $buttons = '';
    $btn_text_1 = get_post_meta(get_the_ID(), 'header_btn1_text', true) ? get_post_meta(get_the_ID(), 'header_btn1_text', true) : array();
    $btn_url_1 = get_post_meta(get_the_ID(), 'header_btn1_url', true) ? get_post_meta(get_the_ID(), 'header_btn1_url', true) : array();
    $btn_text_2 = get_post_meta(get_the_ID(), 'header_btn2_text', true) ? get_post_meta(get_the_ID(), 'header_btn2_text', true) : array();
    $btn_url_2 = get_post_meta(get_the_ID(), 'header_btn2_url', true) ? get_post_meta(get_the_ID(), 'header_btn2_url', true) : array();

    if ($btn_text_1) {

        if ($btn_text_1) {
            $buttons .= '<a class="shadepro-login-btn" href=" ' . esc_url($btn_url_1) . ' "> ' . esc_html($btn_text_1) . ' </a>';
        }
        if ($btn_text_2) {
            $buttons .= '<a class="shadepro-login-btn" href=" ' . esc_url($btn_url_2) . ' "> ' . esc_html($btn_text_2) . ' </a>';
        }
    } elseif (isset($shadepro['header_btn1_text'])) {
        if (isset($shadepro['header_btn1_text'])) {
            $buttons .= '<a class="shadepro-login-btn" href=" ' . esc_url($shadepro['header_btn1_url']) . ' "> ' . esc_html($shadepro['header_btn1_text']) . ' </a>';
        }
        if (isset($shadepro['header_btn2_text'])) {
            $buttons .= '<a class="shadepro-login-btn" href=" ' . esc_url($shadepro['header_btn2_url']) . ' "> ' . esc_html($shadepro['header_btn2_text']) . ' </a>';
        }
    }

    return $buttons;
}

add_action('wp_ajax_cloadmore', 'shadepro_comments_loadmore_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_cloadmore', 'shadepro_comments_loadmore_handler'); // wp_ajax_nopriv_{action}

function shadepro_comments_loadmore_handler()
{

    // maybe it isn't the best way to declare global $post variable, but it is simple and works perfectly!
    global $post;
    $post = get_post($_POST['post_id']);
    setup_postdata($post);

    wp_list_comments(
        array(
            'page' => $_POST['cpage'], // current comment page
            'per_page' => get_option('comments_per_page'),
            'style' => 'ol',
            'short_ping' => true,
        )
    );
    die; // don't forget this thing if you don't want "0" to be displayed
}

/**
 * Get navbar scheme classes
 *
 */

function shadepro_get_navbar_scheme()
{
    $shadepro = get_option('shadepro');

    $output = '';


    $navbar_color_scheme = get_post_meta(get_the_ID(), 'navbar_color_scheme', true);

    if (!empty($navbar_color_scheme)) {
        $output .= $navbar_color_scheme;
    } else if (isset($shadepro['header_navbar_scheme'])) {
        $output .= $shadepro['header_navbar_scheme'];
    }

    return $output;
}

/**
 * shadepro header Settings
 *
 */
function shadepro_header_settings()
{

    $shadepro = get_option('shadepro');

    if (class_exists('ReduxFrameworkPlugin')) {
        if ($shadepro['use_custom_header_template'] == true && isset($shadepro['header_section'])) {
            printf('<header class="site-header shadepro-elementor-header">');
            shadepro_elementor_template_query($shadepro['header_section']);
            printf('</header>');
        } else {
            get_template_part('template-parts/headers/header-style-1');
        }
    } else {
        get_template_part('template-parts/headers/header-style-1');
    }
}

/**
 * shadepro Footer Settings
 *
 */
function shadepro_footer_settings()
{

    $shadepro = get_option('shadepro');

    if (class_exists('ReduxFrameworkPlugin')) {
        if (isset($shadepro['use_custom_footer_template']) == true && isset($shadepro['footer_section'])) {

            shadepro_elementor_template_query($shadepro['footer_section']);
        } else {
            shadepro_raw_footer();
        }
    } else {

        shadepro_raw_footer();
    }
}

/**
 * shadepro Raw Footer
 *
 */
function shadepro_raw_footer()
{
    $shadepro = get_option('shadepro');

    if (isset($shadepro['footer_copyright'])) {
        echo '<div class="shadepro-copyright text-center">' . $shadepro['footer_copyright'] . '</div>';
    } else {
        echo '<div class="shadepro-copyright text-center">' . esc_html__('Copyright 2020, All Rights Reserved', 'shadepro') . '</div>';
    }
}

/**
 * shadepro Footer Query
 *
 */
function shadepro_elementor_template_query($post_id)
{
    // Query for blog posts
    $args = array(
        'post_type' => 'elementor_library',
        'posts_per_page' => 1,
        'p' => $post_id,
    );

    $footer_query = new WP_Query($args);

    if ($footer_query->have_posts()) :
        while ($footer_query->have_posts()) :
            $footer_query->the_post();

            the_content();

        endwhile;
    endif;
}

/**
 * shadepro get archive post type
 *
 */
function shadepro_get_archive_post_type()
{
    $postname = isset(get_queried_object()->name) ? get_queried_object()->name : '';
    return is_archive() ? $postname : '';
}


function shadepro_update_elementor_scheme($colors = array())
{
    global $shadepro;
    if (class_exists('ReduxFrameworkPlugin')) :
        $accent_color = $shadepro['custom_accent_color'];
        $heading_color = $shadepro['heading_color'];
        $text_color = $shadepro['text_color'];
        $colors = [
            "1" => "$heading_color",
            "2" => "$heading_color",
            "3" => "$text_color",
            "4" => "$accent_color"
        ];
        return $colors;
    endif;
    return false;
}

add_action('after_switch_theme', 'shadepro_update_elementor_scheme');



if (!function_exists('is_shop') && !class_exists('woocommerce')) {
    function is_shop()
    {
        return false;
    }
}
