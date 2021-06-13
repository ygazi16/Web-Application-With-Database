<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$date=  $_REQUEST['date_insert'];
$pos_rate = $_REQUEST['pos_rate_insert'];
$test_per_case = $_REQUEST['test_per_case_insert'];
$country =  $_REQUEST['country_insert'];



// Attempt insert query execution
$sql = "INSERT INTO country_test (date,pos_rate, test_per_case, country) VALUES ('$date', '$pos_rate', '$test_per_case','$country')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



   // Close connection
   mysqli_close($conn);

?>
