<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$count=  $_REQUEST['count'];


$query = "SELECT  Which_vaccine_applied.country,  SUM(NumberDosesReceived)as sum, Response_Data.Response_measure as ResponseMeasure, Response_Data.date_start as date
FROM Which_vaccine_applied, Response_Data
WHERE Which_vaccine_applied.country = Response_Data.country
GROUP BY NumberDosesReceived, Response_measure, country,Response_Data.date_start
having count(*) > '$count' and sum > 0
order by  sum asc;" ;


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Country</font> </td> 
          <td> <font face="Arial">Sum</font> </td>
          <td> <font face="Arial">Response Measure</font> </td> 
          <td> <font face="Arial">Date</font> </td>  
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["country"];
        $field2name = $row["sum"];
        $field3name = $row["ResponseMeasure"];
        $field4name = $row["date"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>
