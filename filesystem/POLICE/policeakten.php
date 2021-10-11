<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="police.php">einloggen</a>');
}






 

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
	
	        <header>
     
            </header>
	        <a href="./rechner.php" class="rechner_verknuepfung"><button>Taschenrechner</button></a>
           
            
				<?php include './taskleiste.php';?>
	       
		


    </body>
</html>
	
