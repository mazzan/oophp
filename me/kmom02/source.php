<?php 
/**
 * This is a MaSan pagecontroller.
 *
 */
// Include the essential config-file which also creates the $masan variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$masan['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
$source = new CSource();


// Do it and store it all in variables in the Anax container.
$masan['title'] = "Visa källkod";

$masan['main'] = "<h1>Visa källkod</h1>\n". $source->View();


// Finally, leave it all to the rendering phase of Anax.
include(MASAN_THEME_PATH);

