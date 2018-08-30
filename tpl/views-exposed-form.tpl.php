<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order.
 *   May be optional.
 * - $items_per_page: The select box with the available items per page.
 *   May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied.
 *   May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>

    <?php if (in_array('filter-search_api_views_fulltext', array_keys($widgets))): ?>
      <?php $widget = $widgets['filter-search_api_views_fulltext']; ?>
      <div id="<?php print $widget->id; ?>-wrapper" class="cd-search--inline__form-inner">

        <label for="cd-search" class="element-invisible"><?php print $widget->label; ?></label>
        <input type="search" placeholder="<?php print $widget->label; ?>" name="search" id="edit-search-api-views-fulltext" class="cd-search--inline__input" autocomplete="off">

        <button type="submit" class="cd-search--inline__submit">
          <svg width="34" height="34" viewBox="0 0 34 34"><title>search</title><path d="M19.427 20.427c-1.39 0.99-3.090 1.573-4.927 1.573-4.694 0-8.5-3.806-8.5-8.5s3.806-8.5 8.5-8.5c4.694 0 8.5 3.806 8.5 8.5 0 2.347-0.951 4.472-2.49 6.010l5.997 5.997c0.275 0.275 0.268 0.716-0.008 0.992-0.278 0.278-0.72 0.28-0.992 0.008l-6.081-6.081zM14.5 21c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5v0z" stroke-width="1"></path></svg>
          <span class="element-invisible">Search</span>
        </button>

      </div>

    <?php endif; ?>
