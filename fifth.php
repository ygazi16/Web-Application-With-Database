<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$count=  $_REQUEST['count'];
$num=  $_REQUEST['num'];


$query = "select country,life_expectancy
from country_statistics
where country in
(select country
from Which_vaccine_applied
where NumberDosesReceived > '$num'
group by country
having count(*)> '$count')
group by country
order by life_expectancy desc;

" ;


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Country</font> </td> 
          <td> <font face="Arial">Life Expectancy</font> </td>
       
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["country"];
        $field2name = $row["life_expectancy"];
       

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
