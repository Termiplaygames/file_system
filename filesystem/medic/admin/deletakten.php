<?php
session_start();
include './db.php';

session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="admin.php">einloggen</a>');
}






 



?>

<!DOCTYPE html5>
<html>
	<head>
	
		<title>
			
		</title>
		
		<link rel="stylesheet" href="designp.css"> 

		<meta charset="utf-8">
		
	</head>

	<body>
	
	        <header>
     
            </header>
	        
            
            <?php include './taskleiste.php';?> 


            <div class="program_create">
<div class="blau2">Akten Löschen<a href="./adminpanel.php" class="ROT2">X</a></div>			

<br>
<br> 
<?php
$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM medicakten");
$statement->execute();  
$row = $statement->fetch();
echo "Es wurden ".$row['anzahl']." Akte(n) gefunden";
?>
<br>
<?php
$sql = "SELECT * FROM medicakten";
foreach ($pdo->query($sql) as $row) {
   echo "Fall: ".$row['ID']." "."<strong>Vorname: </strong>".$row['vor']." "."<strong>Nachname: </strong>".$row['nach']."<strong> Tatdatum: </strong>".$row['time_of_act']."<br />";
   
}

?>
<form action='' method='POST'>
    <input type="text" name="search" > <input type="submit" name="suche_enter" value="löschen" onsubmit="setTimeout(function() { window.location.reload(); }, 5)"> 
</form>
<?php
error_reporting(0);
$search = $_POST["search"];
$sql = "DELETE FROM medicakten WHERE ID = $search" ;
foreach ($pdo->query($sql) as $row) {
   echo "Benutzer mit der ID ".$row['ID']." gelöscht!<br />";
   


}

$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM medicakten");
$statement->execute();  
$row = $statement->fetch();
echo "Aktenverzeichnis Aktualisiert! Es wurden ".$row['anzahl']." Akte(n) gefunden";
?>
<br>
<?php
$sql = "SELECT * FROM medicakten";
foreach ($pdo->query($sql) as $row) {
   echo "Fall: ".$row['ID']." "."<strong>Vorname: </strong>".$row['vor']." "."<strong>Nachname: </strong>".$row['nach']."<strong> Tatdatum: </strong>".$row['time_of_act']."<br />";
   
}

 ?>
 </body>
</html>