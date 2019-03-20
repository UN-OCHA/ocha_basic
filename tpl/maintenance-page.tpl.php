<?php

/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */

?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
<div class="page-wrapper">
  <a href="#main-content" class="skip-link element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>

  <?php include 'cd/cd-header/cd-header.inc'; ?>

  <div class="cd-container" id="main-content" role="main">

    <?php if ($title): ?>
        <h1 class="page-heading"><?php print $title; ?></h1>
    <?php endif; ?>

    <?php print render($page['help']); ?>

    <?php print $content; ?>

  </div>
</div>

<?php include 'cd/cd-footer/cd-footer.inc'; ?>
<?php echo file_get_contents(drupal_get_path('theme', 'ocha_basic') . '/img/icons/icons-sprite.svg'); ?>

</body>
</html>
