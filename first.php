<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$date=  $_REQUEST['date'];


$query = "SELECT distinct(daily.country), daily.total_deaths
FROM comp306.country_statistics join comp306.daily
where country_statistics.country = daily.country and daily.date = '$date'
ORDER BY total_deaths DESC;" ;


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Country</font> </td> 
          <td> <font face="Arial">Total Deaths</font> </td> 
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["country"];
        $field2name = $row["total_deaths"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>
