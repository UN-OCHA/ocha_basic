<?php
/**
 * @file
 * Displays the site footer.
 */

?>

<footer class="cd-footer" role="contentinfo">
  <div class="cd-container cd-footer__inner">

    <div class="cd-footer-menu cd-footer__section">
      <?php print render($page['footer_navigation']); ?>
    </div>

    <div class="cd-footer-social cd-footer__section">
      <a href="#" class="cd-footer-social__link">
        <span class="sr-only">Facebook</span>
        <span class="icon-facebook" aria-hidden="true"></span>
      </a>
      <a href="#" class="cd-footer-social__link">
        <span class="sr-only">Twitter</span>
        <span class="icon-twitter" aria-hidden="true"></span>
      </a>
      <a href="#" class="cd-footer-social__link">
        <span class="sr-only">YouTube</span>
        <span class="icon-youtube" aria-hidden="true"></span>
      </a>
    </div>

    <div class="cd-footer-provided-by cd-footer__section">
      <span>Service provided by</span>
      <span class="cd-footer-provided-by__logo">
        <span class="sr-only">UN-OCHA</span>
      </span>
    </div>

    <div class="cd-footer-copyright cd-footer__section">
      <?php if ($page['footer_license']) : ?>
        <div class="cd-footer-copyright__message">
          <?php print render($page['footer_license']); ?>
          <span class="cd-footer-copyright__icon icon-creative-commons" aria-hidden="true"></span>
        </div>
      <?php
endif; ?>
    </div>

  </div>
</footer>
