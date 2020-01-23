<?php
function footers_add_section( $wp_customize ) {
    $wp_customize->add_section('footers', array('title' => 'Footers'));
}
add_action( 'customize_register', 'footers_add_section' );

function copyrights_add_section( $wp_customize ) {
    $wp_customize->add_section('copyrights', array('title' => 'Copyrights'));
}
add_action( 'customize_register', 'copyrights_add_section' );

// =========================
// = custome site identity =
// =========================
function site_identity_customizer_settings( $wp_customize ) {
    $wp_customize->add_setting(
        'my_skils',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'my_skils',
        array(
            'label'      => __( 'Skills', 'textdomain' ),
            'settings'   => 'my_skils',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text',
        )
    ) );

    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[image_upload]', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload', array(
        'label'    => __('Image Upload', 'themename'),
        'section'  => 'title_tagline',
        'settings' => 'themename_theme_options[image_upload]',
    )));

}
add_action( 'customize_register', 'site_identity_customizer_settings' );


// =========================
// = custome footer        =
// =========================
function footer_customizer_settings( $wp_customize ) {
    $wp_customize->add_setting(
        'location',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'location',
        array(
            'label'      => __( 'Location', 'textdomain' ),
            'settings'   => 'location',
            'priority'   => 10,
            'section'    => 'footers',
            'type'       => 'textarea',
        )
    ));

    $wp_customize->add_setting(
        'facebook',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'facebook',
        array(
            'label'      => __( 'Facebook', 'textdomain' ),
            'settings'   => 'facebook',
            'priority'   => 10,
            'section'    => 'footers',
            'type'       => 'text',
        )
    ));

    $wp_customize->add_setting(
        'twitter',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'twitter',
        array(
            'label'      => __( 'Twitter', 'textdomain' ),
            'settings'   => 'twitter',
            'priority'   => 10,
            'section'    => 'footers',
            'type'       => 'text',
        )
    ));
    $wp_customize->add_setting(
        'linkedin',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'linkedin',
        array(
            'label'      => __( 'Linkedin', 'textdomain' ),
            'settings'   => 'linkedin',
            'priority'   => 10,
            'section'    => 'footers',
            'type'       => 'text',
        )
    ));
    $wp_customize->add_setting(
        'link',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'link',
        array(
            'label'      => __( 'Link', 'textdomain' ),
            'settings'   => 'link',
            'priority'   => 10,
            'section'    => 'footers',
            'type'       => 'text',
        )
    ));

    $wp_customize->add_setting(
        'about',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about',
        array(
            'label'      => __( 'About', 'textdomain' ),
            'settings'   => 'about',
            'priority'   => 10,
            'section'    => 'footers',
            'type'       => 'textarea',
        )
    ));
}
add_action( 'customize_register', 'footer_customizer_settings' );


// =========================
// = custome footer        =
// =========================
function copyright_customizer_settings( $wp_customize ) {
    $wp_customize->add_setting(
        'copyright',
        array(
            'default' => '',
            'type' => 'option', // you can also use 'theme_mod'
            'capability' => 'edit_theme_options'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'copyright',
        array(
            'label'      => __( 'Copyright', 'textdomain' ),
            'settings'   => 'copyright',
            'priority'   => 10,
            'section'    => 'copyrights',
            'type'       => 'text',
        )
    ));

}
add_action( 'customize_register', 'copyright_customizer_settings' );