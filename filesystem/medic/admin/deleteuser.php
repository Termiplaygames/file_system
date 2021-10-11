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
<div class="blau2">Benutzer Löschen<a href="./adminpanel.php" class="ROT2">X</a></div>			

<br>
<br> 

<?php
$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM usersf");
$statement->execute();  
$row = $statement->fetch();
echo "Es wurden ".$row['anzahl']." Benutzer gefunden";
?>
<br>
<?php
$sql = "SELECT * FROM usersf";
foreach ($pdo->query($sql) as $row) {
   echo "ID: ".$row['id']." "."<strong>Benutzer: </strong>".$row['bn']." <br />";
   
}

?>
<form action='' method='POST'>
    <input type="text" name="search" > <input type="submit" name="suche_enter" value="löschen" onsubmit="setTimeout(function() { window.location.reload(); }, 5)"> 
</form>
<?php
error_reporting(0);
$search = $_POST["search"];
$sql = "DELETE FROM usersf WHERE ID = $search" ;
foreach ($pdo->query($sql) as $row) {
   echo "Benutzer mit der ID ".$row['ID']." gelöscht!<br />";
   


}

$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM usersf");
$statement->execute();  
$row = $statement->fetch();
echo "Benutzerliste wurde Aktualisiert! Es wurden ".$row['anzahl']." Benutzer gefunden";
?>
<br>
<?php
$sql = "SELECT * FROM usersf";
foreach ($pdo->query($sql) as $row) {
   echo "ID: ".$row['id']." "."<strong>Benutzer: </strong>".$row['bn']." <br />";
   
}

 ?>
 </body>
</html>