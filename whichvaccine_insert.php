<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$country =  $_REQUEST['country_insert'];
$year_week = $_REQUEST['year_week_insert'];
$first_dose =  $_REQUEST['first_dose_insert'];
$second_dose = $_REQUEST['second_dose_insert'];
$number_doses_received =  $_REQUEST['num_doses_insert'];
$which_vaccine = $_REQUEST['which_vacc_insert'];

// Attempt insert query execution
$sql = "INSERT INTO Which_vaccine_applied (Country,Year_Week, FirstDose, SecondDose,NumberDosesReceived,Which_vaccine) VALUES ('$country', '$year_week', '$first_dose','$second_dose', '$number_doses_received', '$which_vaccine')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



   // Close connection
   mysqli_close($conn);

?>
