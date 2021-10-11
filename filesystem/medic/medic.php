<?php 
session_start();
include './db.php';
 
if(isset($_GET['login'])) {
    $email = $_POST['bn'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM usersf WHERE bn = :bn");
    $result = $statement->execute(array('bn' => $email));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        die('<img class="click_gif" src="./src/load.gif"><script language="javascript">
        function Weiterleitung()

        {
           location.href="./medicakten.php";
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
  <link rel="stylesheet" href="designm.css">    
</head> 
<body>
<div class="section">
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
<div class="blau"><a href="https://youtu.be/j61hPrXCUxw" class="rot">X  </a></div>
 <p>Bitte einloggen zum Fortfahren
<form action="?login=1" method="post">
Username:
<input type="bn" size="40" maxlength="250" name="bn"><br><br>
 
Passwort:
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Login">

</form> 
</div>
</body>
</html>
