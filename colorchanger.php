<?php
echo "Press button for new color: ";
error_reporting('E_ALL');
ini_set('display_errors', 1);

// colorChanger är en function som ska sätta igång vad som ska bli slumpmässigt i valet av färger

function colorChanger($randomColor) {
	echo '$randomColor was pressed 1 time';
}
$randomColor = rand(0,2);
$array = array();
		array_push($array, ' white');
		array_push($array, ' blue');
		array_push($array, ' yellow');

	
// Färgerna visas upp random i knappen med färg och text.
echo $array [$randomColor];
$myColor = $array [$randomColor];

// Härifrån ska det skickas till text-fil med info om vilken färg som är populärast och kommer upp oftast.

	
	//Filen med kod öppnas och siffror ska skrivas in i en csv-fil
	
 /*	$countThis = 'countcustomer.csv';
	$fileHandle = fopen($countThis, 'w') or die('Cannot open file');
	foreach($views as $result =>$value){
	$click = 0;
	$visit = 0;
	echo ++$y;
	$new_result = $new_result . $value . "," $click "," . $visit . "\n";
	
	}
	
	function seeNumbers($stats = $click, $visit, $views){
		$click = 0;
		$visit = 0;
		$views = 0;
	}
	
	return $stats;
	
	$fileWrite = fwrite($fileHandle, $array, + "\r\n");
	fclose= ($fileHandle);
*/

/*class Button {
	public $color;
	
	public function setColor($color)
	{
		$this->color = $color;
	}
}
	$myButton = new Button();
	$myButton->setColor('black');

	$myButton2 = new Button();
	$myButton2->setColor('white');
	
	// Vi har en function som har döpts till något logiskt i förhållande till den variabel som ska utföras. Sedan i blocket så vill vi veta vad det nya värdet av $currentCount men att lägga till 1.
	
	public function increasePageview($currentCount){
		return $currentCount + 1;
	}
	
*/
?>
