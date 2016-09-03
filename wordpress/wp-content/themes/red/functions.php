<?php
/**
 * Wordpress Theme boilerplate based completely on Sage (https://github.com/roots/sage)
 */
$includes = [
  'lib/setup.php',                 // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/wrapper.php',               // Theme wrapper class
  'lib/helpers.php',               // Helper methods class
  'lib/main.php',                  // Main controller class
  ];

  foreach ($includes as $file) 
  {
  	if (!$filepath = locate_template($file)) 
  		trigger_error(sprintf(__('Error locating %s for inclusion', 'kage'), $file), E_USER_ERROR);
  	require_once $filepath;
  }
  unset($file, $filepath);