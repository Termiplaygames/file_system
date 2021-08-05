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
<div class="blau2">Akten Durchsuchen<a href="./policeakten.php" class="ROT2">X</a></div>			

<br>
<br>
<?php
include "./db.php";

$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM policeakten");
$statement->execute();  
$row = $statement->fetch();
echo "Es wurden ".$row['anzahl']." Akte(n) gefunden";
?>
<br>
<?php
$sql = "SELECT * FROM policeakten";
foreach ($pdo->query($sql) as $row) {
   echo "Fall: ".$row['ID']." "."<strong>Vorname: </strong>".$row['vor']." "."<strong>Nachname: </strong>".$row['nach']."<strong> Tatdatum: </strong>".$row['time_of_act']."<br />";
   
}
?>

    </body>
</html>