<?php
 require("db.php");
 echo $date;
 echo $tiem;
 echo $latitude;
 echo $longitude;
 echo $comments;

 
 $sql = 'INSERT INTO Observations_1 (date,time,latitude,longitude,comments) VALUES ("'.$date.'","'.$time.'","'.$latitude.'","'.$longitude.'","'.$comments.'")';
 $conn->query($sql) or die(mysqli_error($conn));



?>
