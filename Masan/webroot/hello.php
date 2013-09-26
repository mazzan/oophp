<?php 
/**
 * This is a Masan pagecontroller.
 *
 */
// Include the essential config-file which also creates the $masan variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Masan container.
$masan['title'] = "Hello World";
 
$masan['header'] = <<<EOD
<img class='sitelogo' src='img/masan.png' alt='Masan Logo'/>
<span class='sitetitle'>MaSan webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$masan['main'] = <<<EOD
<h1>Hejsan</h1>
<p>Detta är en exempelsida som visar hur Masan webbtemplates kan se ut och fungerar.</p>
EOD;
 
$masan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mats Sandén (mazzan@masoft.se) | <a href='TBI'>Masan på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
// Finally, leave it all to the rendering phase of Masan.
include(MASAN_THEME_PATH);
