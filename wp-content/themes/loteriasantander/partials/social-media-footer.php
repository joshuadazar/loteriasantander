<?php 
  $socialMediaLinks = new stdClass();
  $socialMediaLinks->facebookLink = get_theme_mod('facebook_link', 'https://web.facebook.com/santanderloteria');
  $socialMediaLinks->facebookIcon = get_theme_mod('facebook_icon', '');
  $socialMediaLinks->xLink = get_theme_mod('x_link', 'https://twitter.com/santanderloteria');
  $socialMediaLinks->xIcon = get_theme_mod('x_icon', '');
  $socialMediaLinks->instagramLink = get_theme_mod('instagram_link', 'https://instagram.com/santanderloteria');
  $socialMediaLinks->instagramIcon = get_theme_mod('instagram_icon', '');
?>

<section class="social-media-footer" aria-label="Redes sociales">
  <p class="social-media-footer__title">Conéctate con nosotros</p>
  
  <ul class="social-media-footer__list">
    <li class="social-media-footer__list-item">
      <!-- custom field social-media -->
      
      <?php
        if( !empty($socialMediaLinks->facebookLink) ): ?>
          <a href="<?php echo esc_url($socialMediaLinks->facebookLink); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url($socialMediaLinks->facebookIcon); ?>" alt="Facebook" />
          </a>
      <?php endif; ?>
    </li>
    <li class="social-media-footer__list-item">
      <?php 
        if( !empty($socialMediaLinks->xLink) ): ?>
          <a href="<?php echo esc_url($socialMediaLinks->xLink); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url($socialMediaLinks->xIcon); ?>" alt="x" />
          </a>
      <?php endif; ?>
    </li>
    <li class="social-media-footer__list-item">
      <?php 
        if( !empty($socialMediaLinks->instagramLink) ): ?>
          <a href="<?php echo esc_url($socialMediaLinks->instagramLink); ?>" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url($socialMediaLinks->instagramIcon); ?>" alt="Instagram" />
          </a>
      <?php endif; ?>
    </li>
    <!-- Agrega más redes sociales aquí -->
  </ul>
</section>
