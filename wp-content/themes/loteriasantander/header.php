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
  <?php include 'partials/govco-header.php'; ?>
  <header class="header">
    <div class="header__container">
      <?php $image_url = get_theme_mod( 'header_logo', '' ); ?>
     <img class="header__logo" src="<?php echo !empty($image_url) ? esc_url($image_url) : ''; ?>" alt="logo header">
     <h1 class="header__title"><?php wp_title('|', true, 'right'); bloginfo('name'); ?></h1>
    </div>
    <?php
      $today = date('Y-m-d');
      $newDate = date('Y-m-d', strtotime($today . ' + 7 days'));
    ?>
    <div class="header__information-date">
      <h3 class="header__info-title"><?php echo get_theme_mod( 'header_title', 'Siguiente Sorteo:' ); ?></h3>
      <p class="header__info-date"><?php echo get_theme_mod( 'header_date', $newDate ); ?></p>
    </div>
</header>
 
