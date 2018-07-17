<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * OCHA Basic theme.
 */

/**
 * Implements hook_preprocess_page().
 */

function ocha_basic_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['#attributes']['role'] = 'search';
    $form['search_block_form']['#attributes']['placeholder'] = t('What are you looking for?');
    $form['actions']['submit'] = array(
      '#type' => 'item',
      '#markup' => '<button type="submit" class="cd-search__submit">Go <span class="icon-arrow-right" aria-hidden="true"></span></button>',
      '#weight' => 1000,
    );
  }
}

function ocha_basic_preprocess_search_block_form(&$vars) {
  $vars['search_form'] = str_replace('type="text"', 'type="search"', $vars['search_form']);
}

function ocha_basic_preprocess_html(&$vars) {
    $apple = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => base_path() . path_to_theme() .'/apple-touch-icon.png',
        'rel' => 'apple-touch-icon',
        'sizes' => '180x180'
      ),
    );
    drupal_add_html_head($apple, 'apple-touch-icon');
    $fav_32 = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => base_path() . path_to_theme() .'/favicon-32x32.png',
        'rel' => 'icon',
        'sizes' => '32x32',
        'type' => 'image/png'
      ),
    );
    drupal_add_html_head($fav_32, 'favicon-32x32');
    $fav_16 = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => base_path() . path_to_theme() .'/favicon-16x16.png',
        'rel' => 'icon',
        'sizes' => '16x16',
        'type' => 'image/png'
      ),
    );
    drupal_add_html_head($fav_16, 'favicon-16x16');
    $safari_pinned_tab = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => base_path() . path_to_theme() .'/safari-pinned-tab.svg',
        'rel' => 'mask-icon',
        'color' => '#5bbad5'
      ),
    );
    drupal_add_html_head($safari_pinned_tab, 'safari_pinned_tab');
}

/**
 * Implements hook_pwa_manifest_alter().
 */
function ocha_basic_pwa_manifest_alter(&$manifest) {
  // Hard-code a theme-color into the manifest.
  $manifest['theme_color'] = '#026CB6';

  // Override the PWA default icons with OCHA defaults.
  //
  // If you are using this theme as a starterkit feel free to manually adjust
  // this code block, otherwise copy this hook into your subtheme and customize
  // to your heart's content.
  $manifest['icons'] = [
    [
      'src' => url(drupal_get_path('theme', 'ocha_basic') . '/android-chrome-512x512.png'),
      'sizes' => '512x512',
      'type' => 'image/png',
    ],
    [
      'src' => url(drupal_get_path('theme', 'ocha_basic') . '/android-chrome-192x192.png'),
      'sizes' => '192x192',
      'type' => 'image/png',
    ],
  ];
}
