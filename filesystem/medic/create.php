<?php
session_start();
session_destroy();
 

?>

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
	        
    
<div class="program_create">
<div class="blau2">Akten Anlegen<a href="./policeakten.php" class="ROT2">X</a></div>			

<br>
<P>Erstellen sie die Akten gemäss den Vorgaben<p>
    <form action= "./paction.php" method = "post">
    
    
<p> <input name = "adatum" />Anfertigungsdatum</p>
<p> <input name = "officer" />Name des Mediziners</p>
<div class="TV">
<p> <input name = "vor" /> Vorname des Pat.</p>
<p> <input name = "nach" /> Nachname des Pat.</p>
<p> <input name = "dob" /> Geburstag des Pat.</p>
<br>
<p> <textarea name = "statements" cols="40" rows="5"></textarea>Aussage</p>
</div>
<p> <input name = "time_of_act" />Tatzeit</p>
<p> <input name = "place_of_act" />Tatort</p>
<br>
<p> <textarea name = "course_of_act" cols="40" rows="5"></textarea>Tathergang</p>
<br>
<p> <textarea name = "misc" cols="40" rows="5"></textarea>Sonstiges*</p>

<p><input type = "submit" /><input type = "reset" /></p>













    </form>
</div>
<?php include './taskleiste.php';?>
    </body>
</html>
	
