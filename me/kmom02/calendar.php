<?php 
/**
 * This is a Masan pagecontroller.
 *
 */
 
// Include the essential config-file which also creates the $masan variable with its defaults.
include(__DIR__.'/config.php'); 

// Add style for cdice
$masan['stylesheets'][] = 'css/calender.css';
 
// Do it and store it all in variables in the Masan container.
$masan['title'] = "Månadskalender";

if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");

$month = $_REQUEST["month"];
$year = $_REQUEST["year"];
 
$prev_year = $year;
$next_year = $year;
$prev_month = $month-1;
$next_month = $month+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $year - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $year + 1;
}

$masan['main'] = <<<EOD
<article class="readable">
<h1>Månadskalender</h1>
<table class = 'cal'>
<tr>
EOD;

// Arrange links in a string to work with EOD

$linksString = "<td id = 'links' width=\"50%\" align=\"center\">";
$linksString .= "<a href=\"";
$linksString .= $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year;
$linksString .= " \"style=\"color:#000000\">Föregående månad</a></td>";
$linksString .= "<td id = 'links' width=\"50%\" align=\"center\">";
$linksString .= "<a href=\"";
$linksString .= $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year;
$linksString .= " \"style=\"color:#000000\">Nästa månad</a></td>";
$linksString .= "</tr></table><br/>";

 // Add the linksheader to EOD
$masan['main'] .= <<<EOD
$linksString
EOD;

// Create a new calender instance
$calender = new CCalender();
$calender-> setMonth($month);
$calender-> setYear($year);

 //Count how many blank days will preceed first day in month
 $blankDay =  $calender->getBlanks($calender->getFirstWeekday());

//Building calender table headings 
$calendarString = "<table class = 'cal'>";
$calendarString .= "<tr class = 'head'><th colspan = 7> " . $calender->getFirstMonthName() . " " . $calender->getYear() . " </th></tr>";
$calendarString .= "<tr class = 'list'>";
$calendarString .= "<td id = 'dayHead'>Måndag</td>";
$calendarString .= "<td id = 'dayHead'>Tisdag</td>";
$calendarString .= "<td id = 'dayHead'>Onsdag</td>";
$calendarString .= "<td id = 'dayHead'>Torsdag</td>";
$calendarString .= "<td id = 'dayHead'>Fredag</td>";
$calendarString .= "<td id = 'dayHead'>Lördag</td>";
$calendarString .= "<td id = 'dayHead'>Söndag</td></tr>";

//Counter to keep track of days in week (up tp 7)
$counterDay = 1;
 
// Creating the first row containing days
$calendarString .= "<tr class = 'days'>";

//Creating blank days to fill up until first day in month
while ( $blankDay > 0 ) { 
	$calendarString .= "<td id = 'blankday'></td>"; 
 	$blankDay = $blankDay-1; 
 	$counterDay++;
} 
 
//Create a counter to keep track of number of days in month
$dayInMonth = 1;

/* Create new cell for each day in month
 * If the day is a sunday print in red color
 * If the day counter reaches 7 a new row is created if there are more days to add in month
*/
while ($dayInMonth <=  $calender->getDaysInMonth()){ 
 	 if ($counterDay % 7 == 0){
 	 	 $calendarString .= "<td id = 'sunday'>  $dayInMonth </td>";	 	 
 	 } 
 	 else{
 	 	 $calendarString .= "<td>  $dayInMonth </td>";
 	 }
 	 $dayInMonth++; 
 	 $counterDay++;
 	 
 	 if (($counterDay > 7) && ($dayInMonth <=  $calender->getDaysInMonth())){
 	 	 $calendarString .= "</tr><tr class = 'days'>";
 	 	 $counterDay = 1;
 	 }
 }
 
 //Fill up with blanks to fill up at end of calender

while ( $counterDay >1 && $counterDay <=7 ){ 
	$calendarString .= "<td id = 'blankday'> </td>"; 
 	$counterDay++; 
 } 
$calendarString .= "</tr></table>";

// Add calendar content to EOD
$masan['main'] .= <<<EOD
$calendarString
</article>
EOD;
 

// Finally, leave it all to the rendering phase of Masan.
include(MASAN_THEME_PATH);
