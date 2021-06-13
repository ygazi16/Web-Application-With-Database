<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','Broko002bi','comp306');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$rate=  $_REQUEST['rate'];


$query = "SELECT distinct country_statistics.country , max(country_test.pos_rate) as posRate, country_statistics.male_smokers as MSmokers, country_test.date
FROM country_statistics natural join country_test
where country_statistics.country = country_test.country and date = '4/8/21'
group by country_statistics.male_smokers, country_statistics.country, country_test.pos_rate, country_test.date
having country_statistics.male_smokers > 2
order by country_statistics.male_smokers desc;

" ;


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Country</font> </td> 
          <td> <font face="Arial">Positivity Rate</font> </td>
          <td> <font face="Arial">Male Smoker Rate</font> </td> 
          <td> <font face="Arial">Date</font> </td>  
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["country"];
        $field2name = $row["posRate"];
        $field3name = $row["MSmokers"];
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
