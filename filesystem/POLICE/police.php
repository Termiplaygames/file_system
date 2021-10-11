<?php 
session_start();
include './db.php';
 
if(isset($_GET['login'])) {
    $email = $_POST['bn'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM usersp WHERE bn = :bn");
    $result = $statement->execute(array('bn' => $email));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        die('<img class="click_gif" src="./src/load.gif"><script language="javascript">
        function Weiterleitung()

        {
           location.href="./policeakten.php";
        }
        window.setTimeout("Weiterleitung()", 3000);
    </script>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
    
}
?>
<!DOCTYPE HTML5> 
<html> 
<head>
  <title>Login</title>
  <link href="./designpol.css" rel="stylesheet" >
		   
</head> 
<body>
<div class="section">
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
<div class="blau"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="rot">X  </a></div>
 <p>Bitte einloggen zum Fortfahren
<form action="?login=1" method="post">
Username:
<div class=greentext><input type="bn" size="40" maxlength="250" name="bn"><br><br></div>
 
Passwort:
<div class=greentext><input type="password" size="40"  maxlength="250" name="passwort"><br></div>
 
<input type="submit" value="Login">

</form> 
</div>
</body>
</html>
