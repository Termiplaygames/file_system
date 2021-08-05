
 <?php 

include './db.php';


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
       
       $statement = $pdo->prepare("INSERT INTO policeakten (ID, adatum, officer, vor, nach, dob, statements, time_of_act, place_of_act, course_of_act, misc ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $statement->execute(array('', $adatum, $officer,$vor,$nach,$dob,$statements,$time_of_act,$place_of_act,$course_of_act,$misc)); 
        ?>
        
<HTML>
<head>
<link href="designp.css" rel="stylesheet" >
</head>
<body>
<?php include './taskleiste.php';?>
        
   

</body>
</html>


      