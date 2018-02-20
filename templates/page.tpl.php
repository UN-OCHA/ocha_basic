<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div class="page-wrapper">
  <a href="#main-content" class="skip-link"><?php print t('Skip to main content'); ?></a>
  <?php include 'header.inc'; ?>
  <?php if($messages): ?>
    <div class="cd-container">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>
  <div class="cd-container" id="main-content">

  <?php if($tabs): ?>
    <?php print render($tabs); ?>

  <?php endif; ?>

    <div class="row">
      <div class="<?php if ($page['sidebar_first']): ?>col-md-8<?php else: ?>col-xs-12<?php endif; ?>">
        <?php if ($title): ?><h1 class="page-heading"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($page['content']); ?>
      </div>

      <?php if ($page['sidebar_first']): ?>
        <div class="col-md-4">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php include 'footer.inc'; ?>
