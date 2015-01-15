<?php>

	//Tidstämpel som är tänkt ska skickas till textfil
$time2= date_create("2015-01-12 12:32:00",timezone_open("Europe/Stockholm"));
	
	echo " Current time in Sweden is:", date_format($time2, "Y/m/d H:iP");
		echo "<br>";

	echo $_SERVER['HTTP_USER_AGENT']; 
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
		echo "<br>";
date_default_timezone_set("Europe/Stockholm");
"<br>";
echo "Europe/Stockholm:".date("H:i:s");  "<br>";
	echo "<br";


	//Fil som ska skicka till textfil med tid stämpel


 

echo $time2 + " ";
$fileHandle = fopen("times.txt", 'a');
$success = fwrite($fileHandle, $time2  + "\r\n");
if ($success === FALSE) { 
	echo "Fel vid skrivning"; 
} else
{ 
	echo "Skrivet till filen"; 
}
fclose($filehandle);
?>