<!DOCTYPE html5>
<html>
	<head>
	
		<title>
			Revolution-V.Org - Die Roleplay Revolution
		</title>
		
		<link href="designp.css" rel="stylesheet" >
		

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
<?php
error_reporting(0);
include './db.php';
$search = $_POST["search"];
$sql = "SELECT * FROM policeakten WHERE ID = $search" ;
foreach ($pdo->query($sql) as $row) {
   echo $row['ID']."<br />";
   echo $row['vor']." ".$row['nach'].".<br />";
   echo "geboren am: ".$row['dob'].".<br />";
   echo "Tatzeitpunkt: ".$row['adatum'].".<br />";
   echo "Aussage: ".$row['statements'].".<br />";
   echo "Tatzeit: ".$row['time_of_act'].".<br />";
   echo "Tatort: ".$row['time_of_act'].".<br />";
   echo "Tathergang: ".$row['course_of_act'].".<br />";
   echo "Sonstoges: ".$row['misc'].".<br />";
}
?>
<br>



    </body>
</html>