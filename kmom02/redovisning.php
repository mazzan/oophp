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

<h3>Kmom02: Objektorienterad programmering i PHP</h3>

<p>Det här var det mest omfattande kursmoment jag gjort hitills och det tog betydligt längre tid än vad planen räknade med. Jag är van vid objektorienterad programmering 
sedan tidigare i Java, men tycker ändå att PHP är lite krångligt. Det är inga problem med klasser och objekt. Jag tycker att det svåra är själva PHP syntaxen som kan vara 
ganska jobbig. Jag lade därför mycket tid på oophp20-guiden och försökte  verkligen hänga med i svängarna. Till slut hade jag ett väl fungerande 21-spel och kände mig mogen 
att lösa tärningsuppgiften... även om jag var mer sugen på kalendern.
</p>
<p><b>Tärningsspelet 100</b><br/>
Till att börja med kunde jag inte för mitt liv förstå vad spelet gick ut på. Trots att jag sökte på nätet kunde jag inte hitta någon riktig förklaring. Jag gjorde en enkel lösning 
där man slår en tärning och ska komma så nära 100 poäng som möjligt. Jag utgick ifrån de klasser som byggdes under träningen och lade till funktioner och kod för att hålla reda på 
poäng och antal slag. Jag implementerade även en funktion för att hålla reda på highscore. När jag var klar med en lösning och hade börjat jobba med kalendern insåg jag plötsligt 
hur spelet nog var tänkt att spelas :-) Man skulle naturligtvis kunna spara undan intjänade poäng och det handlade om att ta sig till 100 på så få rundor som möjligt. Jag beslöt mig 
för att låta detta vara och fortsatte med att göra en kalender.
</p>
<p><b>Kalender</b><br/>
Jag tyckte att kalendern var en ritigt bra uppgift som verkligen utmanade mina färdigheter. Jag valde att inte lägga in några bilder (babes) då jag efter tärningsövingen hamnat lite 
i tidsnöd. Det är inga problem att lägga till en funktion i min lösning som visar en bild beroende på vilken månad som visas. Om mitt arbete tillåter kommer jag att bygga vidare på 
min lösning längre fram. I övrigt uppfyller min kalender de krav som ställdes i uppgiften.<br/>
Jag valde att implementera kalenderns funktioner i endast en klass. Då sidan öppnas visas en kalender för innevarande månad. Användaren kan välja att går fram till nästa månad 
eller tillbaka till föregående. Vid årsskiften börjar kalendern om. Kalendern visar alltid "fulla" månader och dagar som inte ingår i vald månad "gråas" ut. Klassen innehåller en 
konstruktor som sätter kalenderns initiala parametrar. I övrigt innehåller klassen Getters och Setters  för att returnera/ sätta månad och år. Klassen innehåller också funktioner för 
att räkna ut antal dagar i vald månad och vilken veckodag månaden börjar på. Det finns också funktioner för att räkna ut hur många "blanka" dagar en månad innehåller innan den 1'a om 
månaden inte börjar på en måndag. Slutligen finns det i klassen funktioner för att översätta engelska månader till svenska. 
</p>

</article>

<article class="readable">

<h3>Kmom01: Kom igång med Objektorienterad PHP</h3>

<p>Jag tyckte att kursmomentet tog ganska lång tid att genomföra. Jag fastnade lite då jag skulle få till callback funktionen. Då jag slutade att försöka lista 
ut hur lärarlösningen såg ut och körde efter eget huvud gick det bättre... Det var kul att installera GIT och köra det hemifrån, vi använder det på jobbet tillsammans 
med Gerrit för kodgranskning. I övrigt stötte jag på det välkända problemet med PHP-short-tags. Jag hittade lösningen på nätet och efter editering av PHP.ini löste det sig.
Jag hade lite problem att validera mina sidor, det berodde på att några filer blivit kodade i andra format än UTF-8.<br/>
</p>PHP-20 var snabbt genomläst och innehöll inga nyheter efter att ha läst kurslitteraturen. Min Anax-mall döpte jag Masan... ett anagram utgående från mitt namn. Jag har inte
direkt arbetat med struktur på webmallar förr så jag tyckte att Anax var genomtänkt och lättöverskådligt. Source.php implementerade jag som en modul då vi använde filvarianten 
under förra kursen.

<p> Jag arbetar på en PC med Windows 7. jag använder främst webläsaren Firefox men har  även installerat IE, Google Chrome och Opera av referensskäl. 
PHP koden utvecklar jag i Eclipse med PDT (PHP development Tool) eller vid mindre ändringar JEdit. För filöverföringar använder jag Filezilla och för 
revisionshantering naturligtvis GIT. Jag provade först Git Bash, men fastnade även för Github för Windows, ett lite mer GUI-baserat verktyg.</p>

</article>

EOD;

 
// Finally, leave it all to the rendering phase of Masan.
include(MASAN_THEME_PATH);
