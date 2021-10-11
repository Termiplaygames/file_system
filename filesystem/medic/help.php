<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="medic.php">einloggen</a>');
}






 

?><!DOCTYPE html5>
<html>
	<head>
	
		<title>
			Revolution-V.Org - Die Roleplay Revolution
		</title>
		
		<link href="designm.css" rel="stylesheet" >
		

		<meta charset="utf-8">
		
	</head>

	<body>
	
	        <header>
     
            </header>
	        
            
			<?php include './taskleiste.php';?>
			<div class="program_create">
<div class="blau2">Hilfe<a href="./medicakten.php" class="ROT2">X</a></div>			

<br>
<br>

<h3>Akten anlegen</h3>
<p>Hier werden Akten angelegt. Einfach in die Felder, entsprechend den Feldern eintragen </p>

<h3>Akten Suchen</h3>
<p>um Akten einsehen zukönnen, musst du zuerst die Akten dursuchen, im Anschluss dessen könnt ihr die anhand der ID die Akte Öffnen</p>

<h3>Hilfe?</h3>
<p>Dein Ernst Bro?</p>

<h3>Admin Panel</h3>
<p>Hier kann man Benutzer erstellen und Akten Löschen (Admin-Rechte erforderlich)</p>

    </body>
</html>