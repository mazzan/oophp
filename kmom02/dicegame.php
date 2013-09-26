<?php 
/**
 * This is a Masan pagecontroller.
 *
 */
 
// Include the essential config-file which also creates the $masan variable with its defaults.
include(__DIR__.'/config.php'); 

// Add style for cdice
$masan['stylesheets'][] = 'css/dice.css';
 
// Do it and store it all in variables in the Masan container.
$masan['title'] = "Tärningsspel";

$masan['main'] = <<<EOD

<article class="readable">
<h1>Tärningsspelet 100</h1>

<p>
I Etthundra ska man samla poäng genom att slå med tärningen. Två till sex ger lika många poäng som tärningen visar.
Slår man däremot en etta så förlorar man alla poäng. Målet är att komma så nära 100 poäng som möjligt utan att slå en etta. 
Spelaren avgör själv när omgången är slut.</p>

<p><a href='?init'>Starta en ny runda</a></p>
<p><a href='?roll'>Kasta tärningen</a></p>
EOD;



// Get the arguments from the query string
$roll = isset($_GET['roll']) ? true : false;
$init = isset($_GET['init']) ? true : false;

// Create the object or get it from the session
if(isset($_SESSION['dicehand'])) {
  $hand = $_SESSION['dicehand'];
}
else {
  $hand = new CDiceHand(1);
  $_SESSION['dicehand'] = $hand;
}

// Roll the dices 
if($roll) {
  $hand->Roll();
}
else if($init) {
  $hand->InitRound();
}

?>
<?PHP
$diceList = $hand->GetRollsAsImageList();
$resultString = "";
$statString = "";

if($roll){
	if ( $hand->GetRoundTotal() != 100){
		if ($hand->GetTotal() != 1){
			$resultString = "<p><h4>Du slog en: " . $hand->GetTotal(). "'a</h4></p>";
		} else {
			$resultString = "<p><h4>Tyvärr du slog en " . $hand->GetTotal(). "'a och dina poäng nollställs!!!</p>";
			$hand->zeroRound();
		}
	} else{
		$resultString .= "<p><h2>Grattis! Du har uppnått 100 poäng!!!</h2></p>";
		if(($hand->getHighScore() == 0) || ($hand->GetRolls() < $hand->getHighScore())){
				$hand->setHighScore();
				$resultString .= "<p><h3>Du har satt ett nytt highscore!</h3></p>";
		}
	}

$total = $hand->GetRoundTotal();
$rolls = $hand->GetRolls();
$highScore = $hand->getHighScore();

$statString = "<p><h4>Din nuvarande summa: $total </h4></p>";
$statString .= "<p><h4>Du har kastat tärningen: $rolls gånger </h4></p>";
$statString .= "<p><h4>Highscore: $highScore</h4></p>";



$masan['main'] .= <<<EOD
$diceList
$resultString
$statString
</article>
EOD;
}


// Finally, leave it all to the rendering phase of Masan.
include(MASAN_THEME_PATH);
