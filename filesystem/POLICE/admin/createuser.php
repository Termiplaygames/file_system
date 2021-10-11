<?php
session_start();
include './db.php';
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
<div class="blau2">Benutzer Anlegen<a href="./adminpanel.php" class="ROT2">X</a></div>			

<br>
<br>  
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
    $bn = $_POST['bn'];
    $passwort = $_POST['passwort'];
    
  
 
    
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM usersp WHERE bn = :bn");
        $result = $statement->execute(array('bn' => $bn));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'Dieser Benutzer ist bereits vergeben<br>';
            $error = true;
        }    
    }
    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO usersp (bn, passwort) VALUES (:bn, :passwort)");
        $result = $statement->execute(array('bn' => $bn, 'passwort' => $passwort_hash));
        
        if($result) {        
            echo 'Nutzer Erfolgreich Regristiert ';
            $showFormular = false;
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    } 
}
 
if($showFormular) {
?>
 
<form action="?register=1" method="post">
Benutzerkennung:<br>
<input type="bn" size="60" maxlength="250" name="bn"><br><br>
 
Passwort:<br>
<input type="password" size="60"  maxlength="250" name="passwort"><br>
 

 
<input type="submit" value="Anlegen">
</form>
 
<?php
} //Ende von if($showFormular)
?></body>
</html>