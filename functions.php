<?php
function mytheme_add_section( $wp_customize ) {
    $wp_customize->add_section('footers', array('title' => 'Footers'));
 }
 add_action( 'customize_register', 'mytheme_add_section' );


function my_register_additional_customizer_settings( $wp_customize ) {
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
add_action( 'customize_register', 'my_register_additional_customizer_settings' );
