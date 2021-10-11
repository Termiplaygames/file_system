
 
<HTML>
<head>
<link href="./designpol.css" rel="stylesheet" >
		
</head>
<body>
<?php include './taskleiste.php';?>
        
<?php 

include './db.php';

error_reporting(0);
$adatum = $_POST["adatum"];
$officer = $_POST["officer"];
$vor = $_POST["vor"];
$nach = $_POST["nach"];
$dob = $_POST["dob"];
$statements = $_POST["statements"];
$time_of_act = $_POST["time_of_act"];
$place_of_act = $_POST["place_of_act"];
$course_of_act = $_POST["course_of_act"];
$misc = $_POST["misc"];
  


$PDO = $PDO->prepare( "UPDATE policeakten SET adatum = :adatum, officer = :officer, vor = :vor, nach = :nach, dob = $:dob, statements = :statements, time_of_act =:time_of_act, place_of_act = :place_of_act, course_of_act = :course_of_act, misc = :misc, WHERE ID = $search" ); 

$PDO->bindValue( ':adatum', $_POST[ 'adatum' ] );
$PDO->bindValue( ':officer', $_POST[ 'officer' ] );
$PDO->bindValue( ':vor', $_POST[ 'vor' ] );
$PDO->bindValue( ':nach', $_POST[ 'nach' ] );
$PDO->bindValue( ':dob', $_POST[ 'dob' ] );
$PDO->bindValue( ':time_of_act', $_POST[ 'time_of_act' ] );
$PDO->bindValue( ':statements', $_POST[ 'statements' ] );
$PDO->bindValue( ':place_of_act', $_POST[ 'place_of_act' ] );
$PDO->bindValue( ':misc', $_POST[ 'misc' ] );

$PDO->execute();

?>

</body>
</html>


      