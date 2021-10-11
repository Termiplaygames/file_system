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
	       
		


    </body>
</html>
	
