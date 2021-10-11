<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="police.php">einloggen</a>');
}
?><!DOCTYPE html5>
<html>
	<head>
	
		<title>
			Revolution-V.Org - Die Roleplay Revolution
		</title>
		
		<link href="./designpol.css" rel="stylesheet" >
		
		

		<meta charset="utf-8">
		
	</head>

	<body>
	
	        <header>
     
            </header>
	        
            
            <?php include './taskleiste.php';?>
            <div class="program_create">
<div class="blau2">Akten Öffnen<a href="./policeakten.php" class="ROT2">X</a></div>			

<br>
<br>          
<form action='' method='POST'>
    <input type="text" name="search" > <input type="submit" name="suche_enter" value="suche"> 
</form>
<div class="fenster">
<?php
error_reporting(0);
include './db2.php';
$search = $_POST["search"];
$sql = "SELECT * FROM owned_vehicles,users WHERE `plate` LIKE '%$search%' And users.identifier = owned_vehicles.owner" ;
foreach ($pdo->query($sql) as $row) {
	echo "Kennzeichen      |        Modell      |        Modell<br>";
   echo $row['plate']." | ".$row['model']." | ".$row['flag']."<br />";
   echo "Fahrzeughalter:<br>"; 
   echo $row['lastname']." ".$row['firstname']."<br />";
   echo "<hr><br />";
   
}


?>
</div>
<br>



    </body>
</html>