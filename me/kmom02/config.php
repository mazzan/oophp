<?php
//include("../../Masan/src/CNavigation/CNavigation.php");
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
 * Define Masan paths.
 *
 */
define('MASAN_INSTALL_PATH', __DIR__ . '/../../Masan');
define('MASAN_THEME_PATH', MASAN_INSTALL_PATH . '/theme/render.php');

/**
 * Include bootstrapping functions.
 *
 */
include(MASAN_INSTALL_PATH . '/src/bootstrap.php');
/**
 * Start the session.
 *
*/
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();
 
 
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
$masan['title_append'] = ' | OOPHP';

$masan['header'] = <<<EOD
<img class='sitelogo' src='img/masan.png' alt='Masan Logo'/>
<span class='sitetitle'>MaSan OOPHP</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;

$masan['footer'] = <<<EOD
<footer><span>Copyright (c) Mats Sandén (mazzan@masoft.se) | <a href=https://github.com/mazzan/Masan/>Masan på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$masan['byline'] = <<<EOD
<footer class="byline">
  <figure class="right"><img src='img/mats.png'>
    <figcaption></figcaption>
  </figure>
  <p>Mats Sandén arbetar på Sony Mobile i Lund. Mats har drygt tolv års erfarenhet av att arbeta med telekommunikation. Han arbetar och har arbetat inom många olika områden, både på nätsidan och med mobiltelefoner. Mats har bred 
erfarenhet av GSM, GPRS, EDGE, UMTS och på senare år LTE.".</p>
</footer>
EOD;

/**
 * The navbar
 *
 */


$masan['navbar'] = array(
  'class' => 'nb-plain',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'tärningsspel' => array('text'=>'Tärningsspel', 'url'=>'dicegame.php', 'title' => 'Tärningsspelet 100'),
    'kalender' => array('text'=>'Månadskalender', 'url'=>'calendar.php', 'title' => 'Månadskalender'),
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
$masan['jquery'] = null; // To disable jQuery
$masan['javascript_include'] = array(); // To enable JavaScript (The include is done in index.tpl)
// $masan['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Below is miscellaneous settings
 */


/**
 * Google analytics.
 *
 */
$masan['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
