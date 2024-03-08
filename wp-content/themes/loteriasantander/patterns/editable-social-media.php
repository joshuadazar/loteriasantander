<?php

function social_media_content( $wp_customize ) {

    // Agrega una sección Social media info al Personalizador
    $wp_customize->add_section( 'social_media', array(
        'title'      => __( 'Social Media Info', 'mytheme' ),
        'priority'   => 30,
    ) );

    // Define los datos de las redes sociales
    $social_media = array(
        'facebook' => array(
            'link' => 'https://web.facebook.com/santanderloteria/',
            'icon' => '',
        ),
        'x' => array(
            'link' => 'https://twitter.com/LoteSantander',
            'icon' => '',
        ),
        'instagram' => array(
            'link' => 'https://www.instagram.com/loteriasantander/?hl=es',
            'icon' => '',
        ),
    );

    // Crea los ajustes y controles para cada red social
    foreach ($social_media as $key => $value) {
        add_social_media_setting_control($wp_customize, $key, $value['link'], $value['icon']);
    }
}

function add_social_media_setting_control($wp_customize, $name, $default_link, $default_icon) {
    $wp_customize->add_setting( $name . '_link', array(
        'default'   => $default_link,
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( $name . '_link', array(
        'label'      => __( ucfirst($name) . ' Link', 'mytheme' ),
        'section'    => 'social_media',
        'settings'   => $name . '_link',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( $name . '_icon', array(
        'default'   => $default_icon,
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $name . '_icon', array(
        'label'      => __( 'Logo ' . ucfirst($name), 'mytheme' ),
        'section'    => 'social_media',
        'settings'   => $name . '_icon',
    ) ) );
}

add_action( 'customize_register', 'social_media_content' );