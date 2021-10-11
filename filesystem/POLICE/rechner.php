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
	
	        <header>
     
            </header>
	        
    
<div class="program_create">
<div class="blau2">Taschenrechner<a href="./policeakten.php" class="ROT2">X</a></div>			

<br>
<!-- Dies ist eine Kommentarzeile. Diese erscheint im HTML -->
<!-- Quelltext, wird aber vom Browser ignoriert und nicht -->
<!-- verarbeitet ... -->

<form method="POST" action="rechner.php">
<br>
<br>
<br>
<input name="zahl1" size=6>
<!-- Erstellt ein Eingabefeld, was 6 Zeichen groß ist. -->
<!-- Es können aber mehr Zeichen eingegeben werden. -->
<!-- Die maximale Eingabemenge setzt man z.B. mit maxlength=10 -->
<!-- fest -->
<select name="rz">
<!--  Mit select erstellt man ein Dropdown Menü. Das was man in -->
<!--  den Dropdowns wählen kann wird mit <option> in den folgenden -->
<!--  Zeilen definiert -->
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
<input name="zahl2" size=6><br>
<br>
<input type=submit name=submit value="Rechnen">
<!-- Ein Eingabefeld <input> vom type=submit ist der Absendebutton -->
<!-- womit man die ganze Eingabe abschickt -->
</form>
<!-- Das Formular wird beendet -->

<?php 
    if (!empty($_POST["submit"]))
        {
        $_zahl1 = $_POST["zahl1"];
        $_zahl2 = $_POST["zahl2"];
        $_rz = $_POST["rz"];

        if ($_rz == "+")    $c=bcadd($_zahl1, $_zahl2, 2);
        if ($_rz == "-")    $c=bcsub($_zahl1, $_zahl2, 2);
        if ($_rz == "*")    $c=bcmul($_zahl1, $_zahl2, 2);
        if ($_rz == "/")    $c=bcdiv($_zahl1, $_zahl2, 2);

        # Rechenaufgabe und Rechnung zeigen !
        echo $_zahl1 . $_rz . $_zahl2 . "=" . $c;
        }
?>











    </form>
</div>
<?php include './taskleiste.php';?>
    </body>
</html>
	
