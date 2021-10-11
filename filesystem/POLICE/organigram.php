<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="police.php">einloggen</a>');
}
?><!DOCTYPE html5>
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
	        
            
            <?php include './taskleiste.php';?>
            <div class="program_create">
<div class="blau2">Akten Öffnen<a href="./policeakten.php" class="ROT2">X</a></div>			

<br>
<br>          

<div class="fenster">
<div class="container2">
  <h1 class="level-1 rectangle">CEO</h1>
  <ol class="level-2-wrapper">
    <li>
      <h2 class="level-2 rectangle">Director A</h2>
      <ol class="level-3-wrapper">
        <li>
          <h3 class="level-3 rectangle">Manager A</h3>
          <ol class="level-4-wrapper">
            <li>
              <h4 class="level-4 rectangle">Person A</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person B</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person C</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person D</h4>
            </li>
          </ol>
        </li>
        <li>
          <h3 class="level-3 rectangle">Manager B</h3>
          <ol class="level-4-wrapper">
            <li>
              <h4 class="level-4 rectangle">Person A</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person B</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person C</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person D</h4>
            </li>
          </ol>
        </li>
      </ol>
    </li>
    <li>
      <h2 class="level-2 rectangle">Director B</h2>
      <ol class="level-3-wrapper">
        <li>
          <h3 class="level-3 rectangle">Manager C</h3>
          <ol class="level-4-wrapper">
            <li>
              <h4 class="level-4 rectangle">Person A</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person B</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person C</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person D</h4>
            </li>
          </ol>
        </li>
        <li>
          <h3 class="level-3 rectangle">Manager D</h3>
          <ol class="level-4-wrapper">
            <li>
              <h4 class="level-4 rectangle">Person A</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person B</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person C</h4>
            </li>
            <li>
              <h4 class="level-4 rectangle">Person D</h4>
            </li>
          </ol>
        </li>
      </ol>
    </li>
  </ol>
</div>
</div>
<br>



    </body>
</html>