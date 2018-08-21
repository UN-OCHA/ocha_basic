<?php
/**
 * @file
 * Template overrides, preprocess, and alter hooks for the OCHA Basic theme.
 */


/**
 * Implements hook_form_alter().
 */
function ocha_basic_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['#attributes']['role'] = 'search';
    $form['#attributes']['class'][] = 'cd-search__form';
    $form['#attributes']['aria-labelledby'][] = 'cd-search-btn';
    $form['search_block_form']['#attributes']['placeholder'] = t('What are you looking for?');
    $form['search_block_form']['#attributes']['autocomplete'][] = 'off';
    $form['search_block_form']['#attributes']['class'][] = 'cd-search__input';
    $form['search_block_form']['#attributes']['id'][] = 'cd-search';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#prefix' => '<button type="submit" name="op" class="cd-search__submit form-submit"><svg width="34" height="34" viewBox="0 0 34 34"><title>search</title><path d="M19.427 20.427c-1.39 0.99-3.090 1.573-4.927 1.573-4.694 0-8.5-3.806-8.5-8.5s3.806-8.5 8.5-8.5c4.694 0 8.5 3.806 8.5 8.5 0 2.347-0.951 4.472-2.49 6.010l5.997 5.997c0.275 0.275 0.268 0.716-0.008 0.992-0.278 0.278-0.72 0.28-0.992 0.008l-6.081-6.081zM14.5 21c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5v0z" stroke-width="1"></path></svg><span class="element-invisible">Search</span>',
      '#suffix' => '</button>',
      '#markup' => '',
      '#weight' => 1000,
    );
    $form['actions']['submit']['#attributes']['class'][] = 'element-invisible';
  }
}


/**
 * Implements hook_preprocess_search_block_form().
 */
function ocha_basic_preprocess_search_block_form(&$vars) {
  $vars['search_form'] = str_replace('type="text"', 'type="search"', $vars['search_form']);
}


/**
 * Implements hook_preprocess_html().
 */
function ocha_basic_preprocess_html(&$vars) {
  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1.0',
    ),
  );

  $apple = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/img/apple-touch-icon.png',
      'rel' => 'apple-touch-icon',
      'sizes' => '180x180',
    ),
  );

  $fav_32 = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/img/favicon-32x32.png',
      'rel' => 'icon',
      'sizes' => '32x32',
      'type' => 'image/png',
    ),
  );

  $fav_16 = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/img/favicon-16x16.png',
      'rel' => 'icon',
      'sizes' => '16x16',
      'type' => 'image/png',
    ),
  );

  $safari_pinned_tab = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => base_path() . path_to_theme() . '/img/safari-pinned-tab.svg',
      'rel' => 'mask-icon',
      'color' => '#5bbad5',
    ),
  );

  drupal_add_html_head($viewport, 'viewport');
  drupal_add_html_head($apple, 'apple-touch-icon');
  drupal_add_html_head($fav_32, 'favicon-32x32');
  drupal_add_html_head($fav_16, 'favicon-16x16');
  drupal_add_html_head($safari_pinned_tab, 'safari_pinned_tab');
}


/**
 * Implements template_preprocess_page().
 */
function ocha_basic_preprocess_page(&$vars) {
  // Assemble list of active languages in this installation.
  $lang_list = language_list('enabled');
  foreach($lang_list['1'] as $avail_lang) {
    $vars['available_languages'][] = $avail_lang;
  }
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
      'src' => url(drupal_get_path('theme', 'ocha_basic') . '/img/android-chrome-512x512.png'),
      'sizes' => '512x512',
      'type' => 'image/png',
    ],
    [
      'src' => url(drupal_get_path('theme', 'ocha_basic') . '/img/android-chrome-192x192.png'),
      'sizes' => '192x192',
      'type' => 'image/png',
    ],
  ];
}
