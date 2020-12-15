<?php

/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}



// This is your option name where all the Redux data is stored.
$opt_name = "shadepro";

$theme_dir = get_template_directory_uri();

// This line is only for altering the demo. Can be easily removed.
$opt_name = apply_filters('redux_demo/opt_name', $opt_name);

/*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

$sampleHTML = '';

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'dev_mode'             => false,
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => esc_html__('ShadePro Options', 'shadepro'),
    'page_title'           => esc_html__('ShadePro Options', 'shadepro'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => 'AIzaSyAs5fBAvB5HKK05nz5zhb1eWFziECHEz6o',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => false,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => false,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => false,
    // Show the time the page took to load, etc
    'update_notice'        => false,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority'        => 2,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    )
);

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf('<p>%s <strong>%s</strong></p>', esc_html('Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable:', 'shadepro'), $v);
} else {
    $args['intro_text'] = sprintf('<p>%s</p>',  esc_html__('This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'shadepro'));
}

// Add content after the form.
$args['footer_text'] = sprintf('<p>%s</p>', esc_html__('This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.', 'shadepro'));

Redux::setArgs($opt_name, $args);

/*
     * ---> END ARGUMENTS
     */


/*
     * ---> START HELP TABS
     */

$tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => esc_html__('Theme Information 1', 'shadepro'),
        'content' => '<p>' . esc_html__('This is the tab content, HTML is allowed.', 'shadepro') . '</p>'
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => esc_html__('Theme Information 2', 'shadepro'),
        'content' => '<p>' . esc_html__('This is the tab content, HTML is allowed.', 'shadepro') . '</p>'
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content =  '<p>' . esc_html__('This is the sidebar content, HTML is allowed.', 'shadepro') . '</p>';
Redux::setHelpSidebar($opt_name, $content);


/*
     * <--- END HELP TABS
     */


// theme activation check 
if (true == get_option('shadepro_theme_activation')) {
    $theme_activation = array(
        'id'    => 'info_success',
        'type'  => 'info',
        'title' => __('Theme activated succeessfully!!', 'shadepro'),
        'style' => 'success',
    );
} else {
    $theme_activation = array(
        'id'    => 'info_error',
        'type'  => 'info',
        'title' => __('Theme are not activated', 'shadepro'),
        'style' => 'critical',
    );
}

/*
     *
     * ---> START SECTIONS
     *
     */

/*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
     */



Redux::setSection($opt_name, array(
    'title'            => esc_html__('General Settings', 'shadepro'),
    'id'               => 'general_settings',
    'class'            => 'option-page-layout',
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'custom_accent_color',
            'type'     => 'color',
            'title'    => esc_html__('Primary Color', 'shadepro'),
            'subtitle' => esc_html__('Pick a color for the theme.', 'shadepro'),
            'validate' => 'color',
            'default' => '#473bf0',
        ),
        array(
            'id'       => 'heading_color',
            'type'     => 'color',
            'title'    => esc_html__('Heading Color', 'shadepro'),
            'subtitle' => esc_html__('Pick a color for headings.', 'shadepro'),
            'validate' => 'color',
            'default' => '#161c2d',
        ),
        array(
            'id'       => 'text_color',
            'type'     => 'color',
            'title'    => esc_html__('Text Color', 'shadepro'),
            'subtitle' => esc_html__('Pick a color for texts.', 'shadepro'),
            'validate' => 'color',
            'default' => '#6E727D',
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'            => esc_html__('Header', 'shadepro'),
    'id'               => 'header_settings',
    'class'            => 'option-page-layout',
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'use_custom_header_template',
            'type'     => 'switch',
            'title'    => esc_html__('Use Custom Header Template', 'shadepro'),
            'desc' => esc_html__('Wish to use any custom header template?', 'shadepro'),
            'default' => false,
        ),
        array(
            'id'    => 'header_section',
            'type'  => 'select',
            'title' => esc_html__('Select Header Template', 'shadepro'),
            'desc' => esc_html__('You can build your Header with Elementor Sections manager and select that template section here so that your selected header template will show all over the site.', 'shadepro'),
            'data'  => 'posts',
            'args'  => array(
                'post_type'      => 'elementor_library',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC',
            ),
            'validate' => 'not_empty',
            'required'   => array('use_custom_header_template', 'equals', true),
        ),
        array(
            'id'       => 'enable_header_btns',
            'type'     => 'switch',
            'title'    => esc_html__('Enable Header Buttons?', 'shadepro'),
            'desc' => esc_html__('Turn on/off header buttons', 'shadepro'),
            'default' => true
        ),
        array(
            'id'       => 'header_btn1_text',
            'type'     => 'text',
            'title'    => esc_html__('Button 1 Text', 'shadepro'),
            'default' => esc_html__( 'Log In', 'shadepro' ),
            'required'   => array('enable_header_btns', 'equals', true),
        ),
        array(
            'id'       => 'header_btn1_url',
            'type'     => 'text',
            'title'    => esc_html__('Button 1 URL', 'shadepro'),
            'required'   => array('enable_header_btns', 'equals', true),
            'default' => esc_url( '#' ),
        ),

        array(
            'id'       => 'header_btn2_text',
            'type'     => 'text',
            'title'    => esc_html__('Button 2 Text', 'shadepro'),
            'default' => esc_html__( 'Sign Up', 'shadepro' ),
            'required'   => array('enable_header_btns', 'equals', true),
        ),
        array(
            'id'       => 'header_btn2_url',
            'type'     => 'text',
            'title'    => esc_html__('Button 2 URL', 'shadepro'),
            'default' => esc_url( '#' ),
            'required'   => array('enable_header_btns', 'equals', true),
        ),


    )
));




Redux::setSection($opt_name, array(
    'title'            => esc_html__('Logo', 'shadepro'),
    'id'               => 'logo_settings',
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'logo',
            'type'     => 'media',
            'title'    => esc_html__('Logo', 'shadepro'),
            'subtitle' => esc_html__('Choose the site logo', 'shadepro'),
            'default'  => array(
                'url' =>  '//grayic.site/shadepro/wp-content/uploads/2020/11/logo.svg'
            ),
        ),
        array(
            'id' => 'logo_max_width_desktop',
            'type' => 'slider',
            'title' => esc_html__('Logo Max Width (Desktop)', 'shadepro'),
            'subtitle' => esc_html__('Set the logo maximum width size for desktop in px unit', 'shadepro'),
            "default" => 125,
            "min" => 0,
            "step" => 5,
            "max" => 300,
        ),
        array(
            'id' => 'logo_max_width_mobile',
            'type' => 'slider',
            'title' => esc_html__('Logo Max Width (Mobile)', 'shadepro'),
            'subtitle' => esc_html__('Set the logo maximum width size for mobile in px unit', 'shadepro'),
            "default" => 125,
            "min" => 0,
            "step" => 5,
            "max" => 300,
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'            => esc_html__('Typography', 'shadepro'),
    'id'               => 'body_typography',
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'body_typography',
            'type'        => 'typography',
            'title'       => esc_html__('Body Typography', 'shadepro'),
            'google'      => true,
            'font-backup' => true,
            "fonts" => array(
                "Circular Std" => "Circular Std",
                "Poppins" => "Poppins",
                "Roboto" => "Roboto"
            ),
            'default'     => array(
                'font-family' => 'Circular Std',
                'google'      => false,
            ),
            'line-height' => true,
            'letter-spacing' => true,
            'output'      => array('body'),
            'units'       => 'px',
            'subtitle'    => esc_html__('Set typography for body', 'shadepro'),
        ),
        array(
            'id'       => 'heading_typography',
            'type'        => 'typography',
            'title'       => esc_html__('Heading Typography', 'shadepro'),
            "fonts" => array(
                "Circular Std" => "Circular Std",
                "Poppins" => "Poppins",
                "Roboto" => "Roboto"
            ),
            'default'     => array(
                'font-family' => 'Circular Std',
                'font-weight' => '700',
                'google'      => false,
            ),
            'google'      => true,
            'font-backup' => true,
            'line-height' => true,
            'letter-spacing' => true,
            'output'      => array('h1, h2, h3, h4, h5, h6'),
            'units'       => 'px',
            'subtitle'    => esc_html__('Set typography for heading', 'shadepro'),
        ),

    )
));


Redux::setSection($opt_name, array(
    'title'            => esc_html__('Breadcrumbs', 'shadepro'),
    'id'               => 'breadcrumb_settings',
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'breadcrumb_on',
            'type'     => 'switch',
            'title'    => esc_html__('Breadcrumb On/Off ', 'shadepro'),
            'subtitle'    => esc_html__('Show/hide the breadcrumb.', 'shadepro'),
            'desc'      => esc_html__('This setting can be override by page breatdcrumb settings.', 'shadepro'),
            'default'     => true,
        ),
        array(
            'id'       => 'breadcrumb_sep',
            'type'     => 'text',
            'title'    => esc_html__('Breadcrumb Seperator ', 'shadepro'),
            'default'     => '-',
            'required'   => array('breadcrumb_on', 'equals', true),
        ),
        array(
            'id'        => 'breadcrumb_background',
            'type'      => 'background',
            'output'    => array('.blog-breadcrumb'),
            'title'     => esc_html__('Breadcrumb Background', 'shadepro'),
            'subtitle'  => esc_html__('Customize your breadcrumb background area.', 'shadepro'),
            'desc'      => esc_html__('This setting can be override by page breatdcrumb settings.', 'shadepro'),
            'required'   => array('breadcrumb_on', 'equals', true),
            'default'   => array(
                'background-color' => 'transparent',
            )
        ),
        array(
            'id'                => 'breadcrumb_spacing',
            'type'              => 'spacing',
            'output'            => array('.blog-breadcrumb'),
            'mode'              => 'padding',
            'units'             => array('em', 'px'),
            'units_extended'    => 'false',
            'title'             => esc_html__('Breadcrumb Area Padding', 'shadepro'),
            'subtitle'          => esc_html__('Please specify breadcrumb area padding.', 'shadepro'),
            'required'          => array('breadcrumb_on', 'equals', true),
        ),
        array(
            'id'          => 'breadcrumb_typography',
            'type'        => 'typography',
            'title'       => esc_html__('Breadcrumb Typography', 'shadepro'),
            'google'      => true,
            'font-backup' => true,
            'letter-spacing' => true,
            "fonts" => array(
                "Circular Std" => "Circular Std",
                "Poppins" => "Poppins",
                "Roboto" => "Roboto"
            ),
            'default'     => array(
                'font-family' => 'Circular Std',
                'google'      => false,
            ),
            'output'      => array('.breadcrumb-area .breadcrumb_title'),
            'units'       => 'px',
            'subtitle'    => esc_html__('Set typography for breadcrumb title', 'shadepro'),
            'required'   => array('breadcrumb_on', 'equals', true),
        ),
    )
));



Redux::setSection($opt_name, array(
    'title'            => esc_html__('Blog Page', 'shadepro'),
    'id'               => 'blog_settings',
    'customizer_width' => '450px',
    'subsection'       => false,
    'fields'           => array(
        array(
            'id'       => 'bp_title',
            'type'     => 'text',
            'title'    => esc_html__('Blog Page Title', 'shadepro'),
            'subtitle'    => esc_html__('Give any breadcrumb page title for the blog page.', 'shadepro'),
            'default'     => esc_html__('Our blog', 'shadepro'),
        ),
        array(
            'id'       => 'blog_hero_caption',
            'type'     => 'text',
            'title'    => esc_html__('Blog Page Hero Caption', 'shadepro'),
            'subtitle'    => esc_html__('Give any breadcrumb page title for the blog page.', 'shadepro'),
            'default'     => esc_html__('Read our latest blog posts.', 'shadepro'),
        ),
        array(
            'id'       => 'blog_layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Blog Layout', 'shadepro'),
            'subtitle' => esc_html__('Choose the layout you want in blog pages', 'shadepro'),
            'options'          => array(
                'fullpage' => get_template_directory_uri() . '/assets/img/layouts/fullpage.png"',
                'left-sidebar' => get_template_directory_uri() . '/assets/img/layouts/left-sidebar.jpg"',
                'right-sidebar' => get_template_directory_uri() . '/assets/img/layouts/right-sidebar.jpg"',
            ),
            'default'  => 'right-sidebar',
        ),
        array(
            'id'       => 'blog_grid',
            'type'     => 'image_select',
            'title'    => esc_html__('Blog Grid', 'shadepro'),
            'subtitle' => esc_html__('Choose the number of column you want in blog pages', 'shadepro'),
            'options'          => array(
                'one-column' => get_template_directory_uri() . '/assets/img/layouts/1-col.png"',
                'two-column' => get_template_directory_uri() . '/assets/img/layouts/2-col.png"',
                'three-column' => get_template_directory_uri() . '/assets/img/layouts/3-col.png"',
            ),
            'default'  => 'two-column',
        ),
        array(
            'id'       => 'continue_reading_title',
            'type'     => 'text',
            'title'    => esc_html__('Continue Reading Button Title', 'shadepro'),
            'subtitle'    => esc_html__('Enter the button text for continue reading button.', 'shadepro'),
            'default'     => esc_html__('Continue reading', 'shadepro'),
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'            => esc_html__('Single Page', 'shadepro'),
    'id'               => 'single_page_settings',
    'customizer_width' => '450px',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'       => 'sp_title',
            'type'     => 'text',
            'title'    => esc_html__('Single Page Title', 'shadepro'),
            'subtitle'    => esc_html__('Give any breadcrumb page title for the single article page.', 'shadepro'),
            'default'     => 'Blog Details',
        ),
        array(
            'id'       => 'single_page_layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Single Page Layout', 'shadepro'),
            'subtitle' => esc_html__('Choose the layout you want in single pages', 'shadepro'),
            'options'          => array(
                'fullpage' => get_template_directory_uri() . '/assets/img/layouts/fullpage.png"',
                'left-sidebar' => get_template_directory_uri() . '/assets/img/layouts/left-sidebar.jpg"',
                'right-sidebar' => get_template_directory_uri() . '/assets/img/layouts/right-sidebar.jpg"',
            ),
            'default'  => 'right-sidebar',
        ),
    )
));
if (class_exists('woocommerce')) {
    Redux::setSection($opt_name, array(
        'title'            => esc_html__('Shop Page', 'shadepro'),
        'id'               => 'shop_page',
        'customizer_width' => '450px',
        'subsection'       => false,
        'fields'           => array(
            array(
                'id'       => 'shop_title',
                'type'     => 'text',
                'title'    => esc_html__('Shop Page Title', 'shadepro'),
                'subtitle'    => esc_html__('Give any breadcrumb page title for the shop page.', 'shadepro'),
                'default'     => esc_html__('Our Shop', 'shadepro'),
            ),
            array(
                'id'       => 'shop_bread_caption',
                'type'     => 'text',
                'title'    => esc_html__('Shop Page Breadcrumb Caption', 'shadepro'),
                'subtitle'    => esc_html__('Give any breadcrumb page caption for the Shop page.', 'shadepro'),
                'default'     => esc_html__('By accessing and placing an order with UXTheme, you confirm that you are in agreement with and bound by the terms and conditions.', 'shadepro'),
            ),
        )
    ));
}

if (post_type_exists('shadepro_cases_stydy')) {
    Redux::setSection($opt_name, array(
        'title'            => esc_html__('Case Study Page', 'shadepro'),
        'id'               => 'cs_settings',
        'customizer_width' => '450px',
        'subsection'       => false,
        'fields'           => array(
            array(
                'id'       => 'cs_title',
                'type'     => 'text',
                'title'    => esc_html__('Case Study Page Title', 'shadepro'),
                'subtitle'    => esc_html__('Give any breadcrumb page title for the case study page.', 'shadepro'),
                'default'     => esc_html__('Case Studies', 'shadepro'),
            ),
            array(
                'id'       => 'cs_hero_caption',
                'type'     => 'text',
                'title'    => esc_html__('Case Study Page Hero Caption', 'shadepro'),
                'subtitle'    => esc_html__('Give any breadcrumb page caption for the case study page.', 'shadepro'),
                'default'     => esc_html__('With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.', 'shadepro'),
            ),
            array(
                'id'       => 'cs_continue_reading_title',
                'type'     => 'text',
                'title'    => esc_html__('Continue Reading Button Title', 'shadepro'),
                'subtitle'    => esc_html__('Enter the button text for continue reading button.', 'shadepro'),
                'default'     => esc_html__('See Case Study', 'shadepro'),
            ),
        )
    ));
}


    Redux::setSection($opt_name, array(
        'title'            => esc_html__('Job Page', 'shadepro'),
        'id'               => 'job_settings',
        'customizer_width' => '450px',
        'subsection'       => false,
        'fields'           => array(
            array(
                'id'       => 'job_title',
                'type'     => 'text',
                'title'    => esc_html__('Job Page Title', 'shadepro'),
                'subtitle'    => esc_html__('Give any breadcrumb page title for the job page.', 'shadepro'),
                'default'     => esc_html__('Case Studies', 'shadepro'),
            ),
            array(
                'id'       => 'job_hero_caption',
                'type'     => 'text',
                'title'    => esc_html__('Job Page Hero Caption', 'shadepro'),
                'subtitle'    => esc_html__('Give any breadcrumb page caption for the job page.', 'shadepro'),
                'default'     => esc_html__('With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.', 'shadepro'),
            ),
        )
    ));





Redux::setSection($opt_name, array(
    'title'            => esc_html__('Footer', 'shadepro'),
    'id'               => 'footer',
    'desc'             => esc_html__('ShadePro footer settings!', 'shadepro'),
    'customizer_width' => '400px',
    'icon'             => 'el el-home',
    'fields'           => array(

        array(
            'id'       => 'use_custom_footer_template',
            'type'     => 'switch',
            'title'    => esc_html__('Use Custom Footer Template', 'shadepro'),
            'desc' => esc_html__('Wish to use any custom footer template?', 'shadepro'),
            'default' => false,
        ),
        array(
            'id'       => 'footer_copyright',
            'type'     => 'text',
            'title'    => esc_html__('Copyright', 'shadepro'),
            'subtitle'    => esc_html__('Give the copyright text', 'shadepro'),
            'default'     => 'Copyright 2020, All Rights Reserved',
            'required'   => array('use_custom_footer_template', 'equals', false),
        ),
        array(
            'id'    => 'footer_section',
            'type'  => 'select',
            'title' => esc_html__('Select Footer Template', 'shadepro'),
            'desc' => esc_html__('You can build your footer with Elementor Sections manager and select that template section here so that your selected footer template will show all over the site.', 'shadepro'),
            'data'  => 'posts',
            'args'  => array(
                'post_type'      => 'elementor_library',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC',
            ),
            'required'   => array('use_custom_footer_template', 'equals', true),
        ),
    )
));


    /*
     * <--- END SECTIONS
     */
