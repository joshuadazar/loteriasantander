<?php
function load_dependencies() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/index.js');
}

add_action('wp_enqueue_scripts', 'load_dependencies');

function header_content( $wp_customize ) {

    // Agrega una sección Encabezado al Personalizador
    $wp_customize->add_section( 'header_content', array(
        'title'      => __( 'Información Encabezado', 'mytheme' ),
        'priority'   => 30,
    ) );

    // Agrega un campo de texto titulo de encabezado
    $wp_customize->add_setting( 'header_title', array(
        'default'   => 'Valor predeterminado',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( 'header_title', array(
        'label'      => __( 'Título', 'mytheme' ),
        'section'    => 'header_content',
        'settings'   => 'header_title',
        'type'       => 'text',
    ) );

    // Agrega un campo de imagen a la sección
    $wp_customize->add_setting( 'header_logo', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
        'label'      => __( 'logo de encabezado', 'mytheme' ),
        'section'    => 'header_content',
        'settings'   => 'header_logo',
    ) ) );
}

add_action( 'customize_register', 'header_content' );
