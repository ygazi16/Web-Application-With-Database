<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$continent=  $_REQUEST['continent_insert'];
$country = $_REQUEST['country_insert'];
$population = $_REQUEST['population_insert'];
$cardiovasc =  $_REQUEST['cardiovasc_insert'];
$diabetes = $_REQUEST['diabetes_insert'];
$female_smokers =  $_REQUEST['female_smokers_insert'];
$male_smokers = $_REQUEST['male_smokers_insert'];
$life_exp =  $_REQUEST['life_expectancy_insert'];


// Attempt insert query execution
$sql = "INSERT INTO country_statistics (continent,country, population, cardiovasc_death_rate,diabetes_prevalence,female_smokers,male_smokers,life_expectancy) VALUES ('$continent', '$country', '$population','$cardiovasc', '$diabetes', '$female_smokers','$male_smokers','$life_exp')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



   // Close connection
   mysqli_close($conn);

?>
