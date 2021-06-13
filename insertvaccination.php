<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$vaccine_name =  $_REQUEST['vaccine_name_insert'];
$vaccine_type = $_REQUEST['vaccine_type_insert'];
$efficiency_rate =  $_REQUEST['eff_rate_insert'];
$doses_needed = $_REQUEST['doses_insert'];
$days_apart =  $_REQUEST['days_apart_insert'];
$min_temp = $_REQUEST['min_stor_insert'];
$max_temp = $_REQUEST['max_stor_insert'];
// Attempt insert query execution
$sql = "INSERT INTO vaccination (vaccine_name,vaccine_type, efficiency_rate, doses_needed,days_apart,min_storage_temperature,max_storage_temperature) VALUES ('$vaccine_name', '$vaccine_type', '$efficiency_rate','$doses_needed', '$days_apart', '$min_temp', '$max_temp')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



   // Close connection
   mysqli_close($conn);

?>
