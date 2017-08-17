<footer role="contentinfo" class="footer">
  <div class="container">
    <?php print render($page['footer_navigation']); ?>
    <?php if($page['footer_logos']): ?>
      <div class="footer__logos">
        <?php print render($page['footer_logos']); ?>
      </div>
    <?php endif; ?>

    <?php if($page['footer_info'] || $page['footer_license']): ?>
      <div class="row footer__small-print">
        <?php if($page['footer_info']): ?>
          <div class="col-md-6">
            <?php print render($page['footer_info']); ?>
          </div>
        <?php endif; ?>
        <?php if($page['footer_license']): ?>
        <div class="col-md-6">
          <?php print render($page['footer_license']); ?>
        </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</footer>
