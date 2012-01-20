<?php

/*
* Initialize theme settings
*/
if (is_null(theme_get_setting('quickSites_layout'))) {
  global $theme_key;

  /*
   * The default values for the theme variables. Make sure $defaults exactly
   * matches the $defaults in the theme-settings.php file.
   */
  $defaults = array(
    'quickSites_theme' => 1,
    'quickSites_layout' => 'a',
    'quickSites_theme_header' => '',
    'quickSites_theme_footer' => '',
  );

  // Get default theme settings.
  $settings = theme_get_settings($theme_key);
  // Don't save the toggle_node_info_ variables.
  if (module_exists('node')) {
    foreach (node_get_types() as $type => $name) {
      unset($settings['toggle_node_info_' . $type]);
    }
  }
  // Save default theme settings.
  variable_set(
    str_replace('/', '_', 'theme_'. $theme_key .'_settings'),
    array_merge($defaults, $settings)
  );
  // Force refresh of Drupal internals.
  theme_get_setting('', TRUE);
}

function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return implode(' &gt; ', $breadcrumb);
  }
}


?>