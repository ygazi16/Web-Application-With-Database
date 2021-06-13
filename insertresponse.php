<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$country =  $_REQUEST['country_insert'];
$response = $_REQUEST['response_insert'];
$startdate =  $_REQUEST['start_date_insert'];
$enddate = $_REQUEST['end_date_insert'];

// Attempt insert query execution
$sql = "INSERT INTO Response_Data (Country,Response_measure, date_start, date_end) VALUES ('$country', '$response', '$startdate','$enddate')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



   // Close connection
   mysqli_close($conn);

?>
