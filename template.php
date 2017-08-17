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
    $form['search_block_form']['#attributes']['placeholder'] = t('Search this site');
    $form['actions']['submit'] = array(
      '#type' => 'item',
      '#markup' => '<button type="submit" class="cd-header-search__button"><span class="sr-only">Search</span></button>',
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
    $manifest = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => base_path() . path_to_theme() .'/manifest.json',
        'rel' => 'manifest'
      ),
    );
    drupal_add_html_head($manifest, 'manifest');
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

