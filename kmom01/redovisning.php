<?php 
/**
 * This is a Masan pagecontroller.
 *
 */
// Include the essential config-file which also creates the $masan variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Masan container.
$masan['title'] = "Redovisning";

 
$masan['main'] = <<<EOD

<article class="readable">
<h1>Redovisning av kursmomenten</h1>

<h3>Kmom01: Kom igång med Objektorienterad PHP</h3>

<p>Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.</p>

{$masan['byline']}

</article>

EOD;

 
// Finally, leave it all to the rendering phase of Masan.
include(MASAN_THEME_PATH);
