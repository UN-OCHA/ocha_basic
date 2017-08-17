<?php
/**
 * @file
 * Displays the site header.
 */
?>
<header class="cd-header" role="banner">
  <div class="cd-global-header">
    <div class="container cd-global-header__inner">
      <?php include 'related_platforms.inc'; ?>

      <?php if ($page['header_top']): ?>
        <div class="cd-global-header__nav">
          <?php print render($page['header_top']); ?>
        </div>
      <?php endif ?>
    </div>
  </div>
  <div class="cd-site-header">
    <div class="container cd-site-header__inner">
      <div class="cd-site-header__logo-holder">
        <?php if($is_front): ?>
          <h1>
            <a href="<?php print $front_page; ?>" class="cd-site-header__logo<?php if($is_front): ?> active<?php endif; ?>">
              <span class="sr-only"><?php print variable_get('site_name', 'Default'); ?></span>
            </a>
          </h1>
        <?php else: ?>
          <a href="<?php print $front_page; ?>" class="cd-site-header__logo">
            <span class="sr-only"><?php print variable_get('site_name', 'Default'); ?></span>
          </a>
        <?php endif; ?>
      </div>

      <?php if($page['header_search']): ?>
        <div class="cd-site-header__search">
        <?php print render($page['header_search']); ?>
        </div>
      <?php endif; ?>

      <button type="button" id="cd-nav-toggle" class="cd-site-header__nav-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>

      <?php if($page['header_navigation']): ?>
        <nav class="cd-site-header__nav dropdown-menu" aria-labelledby="cd-nav-toggle">
          <?php print render($page['header_navigation']); ?>
        </nav>
      <?php endif; ?>

    </div>
  </div>
</header>
