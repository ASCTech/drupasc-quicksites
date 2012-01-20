<?php

/**
* Implementation of THEMEHOOK_settings() function.
*
* @param $saved_settings
*   array An array of saved settings for this theme.
* @return
*   array A form array.
*/

function quickSites_settings($saved_settings){
	drupal_add_js(drupal_get_path('theme', 'quickSites').'/theme_preview.js', 'quickSites');

	/*
   * The default values for the theme variables. Make sure $defaults exactly
   * matches the $defaults in the template.php file.
   */
  $defaults = array(
    'quickSites_theme' => 0,
    'quickSites_layout' => 'a',
    'quickSites_theme_header' => '',
    'quickSites_theme_footer' => '',
  );

  // Merge the saved variables and their default values
  $settings = array_merge($defaults, $saved_settings);

  // Create the form widgets using Form API
  $form['quickSites_theme'] = array(
    '#type' => 'radios',
    '#title' => t('Theme'),
	'#options' => array(0, 1, 2, 3, 4, 5, 6, 7),
    '#default_value' => $settings['quickSites_theme'],
	'#prefix' => '<div style="float:left; margin:10px; height:440px; width:400px;"><div style=" position: relative;">' .
			'<img id="theme_preview" style="border:1px solid #CCC;" src="/' .
			drupal_get_path('theme', 'quickSites').'/variations/theme-'.$settings['quickSites_theme'] .
			'/preview-'.$settings['quickSites_layout'].'.png" alt="Theme preview" />' .
			'<img id="theme_preview_header" style="position: absolute; top: 1px; left: 1px;" src="/' .
			drupal_get_path('theme', 'quickSites').'/variations/header-'.$settings['quickSites_theme_header'] .
			'/preview.png" alt="Header" />' .
			'<img id="theme_preview_footer" style="position: absolute; bottom: 1px; left: 1px;" src="/' .
			drupal_get_path('theme', 'quickSites').'/variations/footer-'.$settings['quickSites_theme_footer'] .
			'/preview.png" alt="Footer" />' .
			'</div></div><div style="float: left;">',
	'#suffix' => '</div>',
  );
  $form['quickSites_theme_header'] = array(
    '#type' => 'radios',
    '#title' => t('Header'),
	'#options' => array(''=>"Theme Default", 0=>0, 1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6),
    '#default_value' => $settings['quickSites_theme_header'],
	'#prefix' => '<div style="float: left; margin-left: 50px;">',
	'#suffix' => '</div>',
  );
  $form['quickSites_theme_footer'] = array(
    '#type' => 'radios',
    '#title' => t('Footer'),
	'#options' => array(''=>"Theme Default", 0=>0, 1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6),
    '#default_value' => $settings['quickSites_theme_footer'],
	'#prefix' => '<div style="float: left; margin-left: 50px;">',
	'#suffix' => '</div>',
  );
  $form['quickSites_layout'] = array(
    '#type' => 'radios',
    '#title' => t('Layout'),
	'#options' => array('a'=>'A', 'b'=>'B', 'c'=>'C'),
    '#default_value' => $settings['quickSites_layout'],
	'#prefix' => '<div style="float: left; width: 500px;">',
	'#suffix' => '</div>',
  );

  // Return the additional form widgets
  return $form;
}

?>