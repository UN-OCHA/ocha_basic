<?php
/**
 * @file
 * Displays the site header.
 */
?>

<header class="cd-header" role="banner">

  <div class="cd-global-header">
    <div class="cd-container cd-global-header__inner">

      <?php include 'ocha_services.inc'; ?>

      <?php if ($page['header_top']): ?>
        <div class="cd-user-menu">
          <?php print render($page['header_top']); ?>
        </div>
      <?php
endif; ?>

    </div>
  </div>

  <div class="cd-site-header">
    <div class="cd-container cd-site-header__inner">

      <?php if($is_front): ?>
        <h1>
          <a href="<?php print $front_page; ?>" class="cd-site-logo">
            <span class="sr-only"><?php print variable_get('site_name', 'Default'); ?></span>
          </a>
        </h1>
      <?php
else: ?>
        <a href="<?php print $front_page; ?>" class="cd-site-logo">
          <span class="sr-only"><?php print variable_get('site_name', 'Default'); ?></span>
        </a>
      <?php
endif; ?>

      <div class="cd-site-header__actions">

        <?php if($page['header_search']): ?>
          <div class="cd-search">

            <button type="button" class="cd-search_btn" data-toggle="dropdown" id="cd-search-btn">
              <span class="icon-search" aria-hidden="true"></span>
              <span class="sr-only">Search</span>
            </button>

            <div class="cd-search__form">
              <?php print render($page['header_search']); ?>
            </div>
          </div>
      <?php
endif; ?>

        <!-- Navigation -->
        <div class="cd-site-header__nav-holder">

          <button type="button" id="cd-nav-toggle" class="cd-site-header__nav-toggle" data-toggle="dropdown">
            <span class="cd-site-header__nav-label--closed">Menu</span>
            <span class="cd-site-header__nav-label--open">
              <span class="icon-cancel"></span>
              <span class="sr-only">Close menu</span>
            </span>
          </button>

          <?php if($page['header_navigation']): ?>
            <nav role="navigation" id="cd-nav" class="cd-nav cd-dropdown" aria-labelledby="cd-nav-toggle">
              <?php print render($page['header_navigation']); ?>
            </nav>
          <?php
endif; ?>
      </div>

    </div>
  </div>

</header>
