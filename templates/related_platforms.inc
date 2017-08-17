<?php
/**
 * @file
 * Displays the related platforms dropdown.
 */
?>
<div class="cd-global-header__sites">
  <button type="button" class="cd-global-header__sites-btn" data-toggle="dropdown" id="cd-related-platforms-toggle">
    <?php print t('Related platforms') ?>
    <i class="icon-arrow-down" aria-hidden="true"></i>
  </button>
  <ul class="dropdown-menu" role="menu" id="cd-related-platforms" aria-labelledby="cd-related-platforms-toggle">
    <li><a href="https://fts.unocha.org/">Financial Tracking Service</a></li>
    <li><a href="https://humdata.org/">Humanitarian Data Exchange</a></li>
    <li><a href="https://humanitarian.id/">Humanitarian ID</a></li>
    <li><a href="https://humanitarianresponse.info/">HumanitarianResponse.info</a></li>
    <li><a href="https://reliefweb.int/">ReliefWeb</a></li>
  </ul>
</div>
