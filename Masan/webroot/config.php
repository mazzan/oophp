<?php
/**
 * Config-file for Masan. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();
 
 
/**
 * Define Masan paths.
 *
 */
define('MASAN_INSTALL_PATH', __DIR__ . '/..');
define('MASAN_THEME_PATH', MASAN_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(MASAN_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Create the Masan variable.
 *
 */
$masan = array();
 
 
/**
 * Site wide settings.
 *
 */
$masan['lang']         = 'sv';
$masan['title_append'] = ' | Masan en webbtemplate';

/**
 * The navbar
 *
 */
$masan['navbar'] = array(
  'class' => 'nb-plain',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {    	   
      return $url;
    }
  }
);

/**
 * Theme related settings.
 *
 */
//$masan['stylesheet'] = 'css/style.css';
$masan['stylesheets'] = array('css/style.css');
$masan['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$masan['modernizr'] = 'js/modernizr.js';
$masan['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'; // To enable jQuery
//$masan['jquery'] = null; // To disable jQuery

$masan['javascript_include'] = array(); // To enable JavaScript (The include is done in index.tpl)
//$masan['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Below is miscellaneous settings
 */


/**
 * Google analytics.
 *
 */
$masan['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
