<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- lwp_head() load styles and js dependencies -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- Your header content goes here -->
  <?php include 'patterns/govco-header.php'; ?>
  <header class="header">
    <?php $image_url = get_theme_mod( 'mytheme_image_setting_id', '' ); ?>
    <img class="header__logo" src="<?php echo !empty($image_url) ? esc_url($image_url) : ''; ?>" alt="logo header">
    <h1 class="header__title"><?php wp_title('|', true, 'right'); bloginfo('name'); ?></h1>
    <!-- <?php $customField = get_field('header_titulo');?> -->
    <h1 class="header__title"><?php echo $customField; ?></h1>
    <p><?php echo get_theme_mod( 'mytheme_text_setting_id', 'Valor predeterminado' ); ?></p>
  </header>
