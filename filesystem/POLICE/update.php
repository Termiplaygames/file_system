<?php
session_start();

 

?>

<!DOCTYPE html5>
<html>
	<head>
	
		<title>
			Revolution-V.Org - Die Roleplay Revolution
		</title>
		
		<link href="./designpol.css" rel="stylesheet" >
		
		

		<meta charset="utf-8">
		
	</head>

	<body>
	
	        
			<?php include './taskleiste.php';?> 
<div class="program_create">
<div class="blau2">Akten bearbeiten<a href="./policeakten.php" class="ROT2">X</a></div>			

<br>
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
   echo "Sonstiges: ".$row['misc'].".<br />";
}
?>
<br>
<form action= "./pactionupdate.php" method = "post">
    
    
<p> <input name = "adatumnew" />Anfertigungsdatum</p>
<p> <input name = "officernew" />Name des Officers*</p>
<div class="TV">
<p> <input name = "vornew" /> Vorname des TV</p>
<p> <input name = "nachnew" /> Nachname des TV</p>
<p> <input name = "dobnew" /> Geburstag des TV</p>
<br>
<p> <textarea name = "statementsnew" cols="40" rows="5"></textarea>Aussage</p>
</div>
<p> <input name = "time_of_actnew" />Tatzeit</p>
<p> <input name = "place_of_actnew" />Tatort</p>
<br>
<p> <textarea name = "course_of_actnew" cols="40" rows="5"></textarea>Tathergang</p>
<br>
<p> <textarea name = "miscnew" cols="40" rows="5"></textarea>Sonstiges*</p>

<p><input type = "submit" /><input type = "reset" /></p>

<p>*</p>

</form>
</div>

    </body>
</html>
	

