<?php
/**
 * @file
 * Displays the site footer.
 */

?>

<footer class="cd-footer" role="contentinfo">
  <div class="cd-container cd-footer__inner">

  <?php print render($page['footer_navigation']); ?>

  <?php if ($secondary_menu): ?>
    <?php print theme('links__menu_footer_menu',
      array(
        'links' => menu_navigation_links('menu-footer-menu'),
        'attributes' => array(
          'id' => 'footer-menu',
          'class' => array('footer__nav cd-footer-menu cd-footer__section'),
        ),
      )
    ); ?>
  <?php endif; ?>

  <?php include 'cd-social-menu.html'; ?>
  <?php include 'cd-mandate.html'; ?>
  <?php include 'cd-copyright.html'; ?>

  <?php if ($page['footer_license']) : ?>
    <div class="cd-footer-copyright__message">
      <?php print render($page['footer_license']); ?>
      <span class="cd-footer-copyright__icon icon-creative-commons" aria-hidden="true"></span>
    </div>
  <?php endif; ?>

 </div>
</footer>
