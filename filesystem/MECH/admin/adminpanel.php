<?php
session_start();
session_destroy();
 

?>

<!DOCTYPE html5>
<html>
	<head>
	
		<title>
			
		</title>
		
		<link href="designp.css" rel="stylesheet">

		<meta charset="utf-8">
		
	</head>

	<body>
	
	        <header>
     
            </header>
	        
            
        
			<?php include './taskleiste.php';?>       
          
<section>
<div class="program_create">
<div class="blau2">Akten Öffnen<a href="./adminpanel.php" class="ROT2">X</a></div>			

<br>
<br> 


<H1>ADMIN PANEL</H1>            
<H2>Akteuelle Benutzer:</H2>
<?php
include './db.php';
$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM usersm");
$statement->execute();  
$row = $statement->fetch();
echo "Es wurden ".$row['anzahl']." Benutzer gefunden";
?>
<br>
<?php
$sql = "SELECT * FROM usersm";
foreach ($pdo->query($sql) as $row) {
   echo "ID: ".$row['id']." "."<strong>Benutzer: </strong>".$row['bn']." <br />";
   
}

?>
</section>
</div>
    </body>
</html>
	
