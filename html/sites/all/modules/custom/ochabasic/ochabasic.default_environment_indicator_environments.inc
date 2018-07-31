<?php
/**
 * @file
 * ochabasic.default_environment_indicator_environments.inc
 */

/**
 * Implements hook_default_environment_indicator_environment().
 */
function ochabasic_default_environment_indicator_environment() {
  $export = array();

  $environment = new stdClass();
  $environment->disabled = FALSE; /* Edit this to true to make a default environment disabled initially */
  $environment->api_version = 1;
  $environment->machine = 'dev';
  $environment->name = 'Dev';
  $environment->regexurl = 'ochabasic.dev.ahconu.org';
  $environment->settings = array(
    'color' => '#aa3333',
    'text_color' => '#ffffff',
    'weight' => 1,
    'position' => 'top',
    'fixed' => 0,
  );
  $export['dev'] = $environment;

  $environment = new stdClass();
  $environment->disabled = FALSE; /* Edit this to true to make a default environment disabled initially */
  $environment->api_version = 1;
  $environment->machine = 'demo';
  $environment->name = 'Demo';
  $environment->regexurl = 'ochabasic.demo.ahconu.org';
  $environment->settings = array(
    'color' => '#237c14',
    'text_color' => '#ffffff',
    'weight' => 2,
    'position' => 'top',
    'fixed' => 0,
  );
  $export['demo'] = $environment;

  $environment = new stdClass();
  $environment->disabled = FALSE; /* Edit this to true to make a default environment disabled initially */
  $environment->api_version = 1;
  $environment->machine = 'staging';
  $environment->name = 'Staging';
  $environment->regexurl = 'ochabasic.staging.ahconu.org';
  $environment->settings = array(
    'color' => '#237c14',
    'text_color' => '#ffffff',
    'weight' => 3,
    'position' => 'top',
    'fixed' => 0,
  );
  $export['staging'] = $environment;

  $environment = new stdClass();
  $environment->disabled = FALSE; /* Edit this to true to make a default environment disabled initially */
  $environment->api_version = 1;
  $environment->machine = 'local';
  $environment->name = 'Local';
  $environment->regexurl = '.*local.*';
  $environment->settings = array(
    'color' => '#0000cc',
    'text_color' => '#ffffff',
    'weight' => 4,
    'position' => 'top',
    'fixed' => 0,
  );
  $export['local'] = $environment;

  $environment = new stdClass();
  $environment->disabled = TRUE; /* Edit this to true to make a default environment disabled initially */
  $environment->api_version = 1;
  $environment->machine = 'default_environment';
  $environment->name = 'Default';
  $environment->regexurl = '.*';
  $environment->settings = array(
  'color' => '#aa3333',
  'text_color' => '#ffffff',
  'weight' => 100,
  'position' => 'top',
  'fixed' => FALSE,
);

  return $export;
}
