<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="medic.php">einloggen</a>');
}
?>
<!DOCTYPE html5>
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
<div class="blau2">Akten Öffnen<a href="./medicakten.php" class="ROT2">X</a></div>			

<br>
<br>          
<form action='' method='POST'>
    <input type="text" name="search" > <input type="submit" name="suche_enter" value="suche"> 
</form>
<br>
<p><h2>Folgende Akten sind verfügbar:</h2>

<br>
<div class="fenster">
<?php
error_reporting(0);
include './db.php';
$search = $_POST["search"];
$sql = "SELECT * FROM medicakten WHERE ID LIKE '%$search%' OR adatum LIKE '%$search%' OR officer LIKE '%$search%' OR vor LIKE '%$search%' OR nach LIKE '%$search%' OR dob LIKE '%$search%' OR time_of_act LIKE '%$search%' OR place_of_act LIKE '%$search%'";
foreach ($pdo->query($sql) as $row) {
   echo $row['ID']."<br />";
   echo $row['vor']." ".$row['nach'].".<br />";
   echo "geboren am: ".$row['dob'].".<br />";
   echo "Anfertigungsdatum: ".$row['adatum'].".<br />";
   echo "Unfallzeit: ".$row['time_of_act'].".<br />";
   echo "Unfallort: ".$row['time_of_act'].".<br />";
   echo "Unfallhergang: ".$row['course_of_act'].".<br />";
   echo "Sonstiges: ".$row['misc'].".<br />";
   echo "<hr>";
}
?>
</div>


<br>



    </body>
</html>