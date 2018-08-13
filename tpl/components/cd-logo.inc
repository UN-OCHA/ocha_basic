<?php if($is_front): ?>
  <h1>
    <a href="<?php print $front_page; ?>" class="cd-site-logo">
      <span class="cd-sr-only"><?php print variable_get('site_name', 'Default'); ?></span>
    </a>
  </h1>
<?php
else: ?>
  <a href="<?php print $front_page; ?>" class="cd-site-logo">
    <span class="cd-sr-only"><?php print variable_get('site_name', 'Default'); ?></span>
  </a>
<?php
endif; ?>
