<?php
$dbconnect = mysqli_connect("localhost", "root", "kipla321", "sali");
 // Check connection
if($dbconnect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
        }
else {
    echo "Connected successfully to database.";
     }
//mysqli_close($dbconnect);
?>