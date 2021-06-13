<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$count=  $_REQUEST['count'];



$query = "select Which_vaccine_applied.country ,sum(NumberDosesReceived) as numdoses
from Which_vaccine_applied
group by Which_vaccine_applied.Country
having sum(NumberDosesReceived) > '$count'

" ;


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Country</font> </td> 
          <td> <font face="Arial">Number of Doses</font> </td>
       
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["country"];
        $field2name = $row["numdoses"];
       

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
