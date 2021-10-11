<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href=medic.php">einloggen</a>');
}


 

?>

<!DOCTYPE HTML>
<html>
	<head>
	<script src="https://cdn.tiny.cloud/1/be6h9714ygtflc99vjlfm7ze0x4ipyjhj8n0wxv86wfewq97/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
tinymce.init({
selector: 'textarea',
menubar: ''
});
</script>
		<title>
			Revolution-V.Org - Die Roleplay Revolution
		</title>
		
		<link href="designm.css" rel="stylesheet" >
		

		<meta charset="utf-8">
		
	</head>

	<body>
	
	        <header>
     
            </header>
	        
    
<div class="program_create">
<div class="blau2">Akten Anlegen<a href="./medicakten.php" class="ROT2">X</a></div>			

<br>
<div class="fenster">
	<P>Erstellen sie die Akten gemäss den Vorgaben<p>
    	<form action= "./paction.php" method = "post">
    
    
	<p>Anfertigungsdatum <input name = "adatum" /></p>
	<p>Name des Mediziners <input name = "officer" /></p>

	<p> Vorname des Pat. <input name = "vor" /></p>
	<p>	Nachname des Pat. <input name = "nach" /> </p>
	<p> Geburstag des Pat.<input type="date" id="start" name="dob"
       value="1970-12-31"
       min="1940-01-01" max="2003-12-31"></p>
	<br>
	<p>Aussage <textarea name = "statements" cols="40" rows="5"></textarea></p>

	<p>Unfallzeit <input type="date" id="start" name="time_of_act"
       value="2021-10-09"
       min="2021-10-09" max="2030-12-31"></p>
	<p> Unfallort<input name = "place_of_act" /></p>
	<br>
	<p> Unfallhergang<textarea name = "course_of_act" cols="40" rows="5"></textarea></p>
	<br>
	<p> Sonstiges*<textarea name = "misc" cols="40" rows="5"></textarea></p>

	<p><input type = "submit"/><input type = "reset" /></p>
	<p>*
	<p>Patienten vorgeschichte/Vorerkrannkungen</p>

</div>










    </form>
</div>
<?php include './taskleiste.php';?>
    </body>
</html>
	















    </form>
</div>
<?php include './taskleiste.php';?>
    </body>
</html>
	
