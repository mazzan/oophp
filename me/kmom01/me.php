<?php 
/**
 * This is a Masan pagecontroller.
 *
 */
// Include the essential config-file which also creates the $masan variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Masan container.
$masan['title'] = "Om mig";

 
$masan['main'] = <<<EOD

<article class="readable">
<h1>Om Mig</h1>

<p>
			Jag heter Mats Sandén och jag kommer från Hässleholm i Skåne. Jag arbetar med utveckling av mobiltelefoner på Sony Mobile i Lund och det har jag gjort sedan 2006. 
			Innan dess jobbade jag för Ericsson i Hässleholm, Lund, Karlskrona och Linköping. Då arbetade jag i huvudsak med företagets BSC (Base Station Controller). Det är den 
			nätnod som styr alla basstationer i ett GSM nät. Under något år arbetade jag på Ersicsson Mobile Platforms i Lund där jag var med om att tillverka de första 3G telefonerna 
			i världen. Jag har bred erfarenhet av GSM, GPRS, EDGE, UMTS och nu på senare tid LTE.<br/>
			Just nu arbetar jag mest med olika verifieringsaktiviteter mot i huvudsak de amerikanska mobiloperatörerna. Det är mycket planering och uppföljning men även praktisk exekvering av
			avancerade tester och felsökning i labmiljö. 
		</p> 
		<p>
			Stor del av min fritid tillbringar jag framför datorn. Jag brukar läsa någon kurs på högskolan varje termin och det har blivit inom data. Jag har tidigare läst programmering i Java och 
			den inledande kursen HTML och PHP.  
			För att kompensera för inaktiviteten på jobbet och då jag pluggar försöker jag träna regelbundet. Det har genom åren blivit mycket löpning, men även cykel och på senare år rollerblades med stavar.
			Jag har under det senaste året börjat ägna mig åt Geocaching. Jag börjar nu närma mig 1000 funna cacher... och det blit kanske värt att fira.
		</p>


{$masan['byline']}

</article>

EOD;

 
// Finally, leave it all to the rendering phase of Masan.
include(MASAN_THEME_PATH);
