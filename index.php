<?php
    $conn = mysqli_connect('localhost','root','Broko002bi','comp306');

    if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}else{
  echo "success";
}

?>



<html lang="en" dir="ltr">


<head>
  <meta charset="utf-8">
  <title>💊Covid19-Data-Center</title>
  <style>
    body {
      background-color: #e1e5ea;
    }
  </style>

</head>

<body>



  <center>
    <hr size="5" noshade>
    <br>

    <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Caduceus.svg/1200px-Caduceus.svg.png" alt="" width="40" height="34">🫀Welcome to the COVID-19 Data Center🫀 <img
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Caduceus.svg/1200px-Caduceus.svg.png" alt="" width="40" height="34"></h1>

    <p><em><strong>Covid-19</strong> Database Management WebSite for Health Authoritizations around the World.</em></p>
    <br>
    <hr size="5" noshade>
  </center>

  <h3>How to use this website effectively:</h3>
  <ul>
    <li>Users are able to reach current COVID-19 Cases/Deaths/Vaccinations.</li>
    <li>Users are able to reach Response Measurements of the countries around the world.</li>
    <li>Users can add new data to the website related to their country's COVID19 info.</li>
  </ul>


<hr>
      <p> To find out the number of doses which the countries have applied; Enter an lower bound as number of doses received: </p>


    <form action='sixth.php' method='post'>
        
        <label>Number of Doses Received:         </label><input type='text' name='count' /><br/>

        <input name="enter rate", value='submit' type='submit'/></p>
    </form>

<hr>
      <p> To find out the correlation between life expectancy and number doses received, Enter count as 'consecutive days which countries have applied vaccination' and enter number of doses as in which amount: </p>


    <form action='fifth.php' method='post'>
        <label>Count:         </label><input type='text' name='count' /><br/>
        <label>Number of Doses Received:         </label><input type='text' name='num' /><br/>

        <input name="enter rate", value='submit' type='submit'/></p>
    </form>


<hr>
      <p> To find out the correlation between 'Male Smoking rate' and 'positivity rate', enter a number representing lower bound of the Male Smoking Rate(0-100): </p>


    <form action='fourth.php' method='post'>
        <label>Rate:         </label><input type='text' name='rate' /><br/>
       

        <input name="enter rate", value='Male Smoking Rate' type='submit'/></p>
    </form>



<hr>
      <p> To find out the correlation between 'diabetes prevelance' and 'positivity rate', enter a number representing lower bound of the prevelance rate(0-100): </p>


    <form action='third.php' method='post'>
        <label>Rate:         </label><input type='text' name='rate' /><br/>
       

        <input name="enter rate", value='Diabetes Prevelance Rate' type='submit'/></p>
    </form>



<hr>
      <p> To find out the correlation between 'vaccine availability' and 'measurements had to be taken in a country', enter a number representing count of different vaccines available in a country: </p>


    <form action='second.php' method='post'>
        <label>Count:         </label><input type='text' name='count' /><br/>
       

        <input name="enter count", value='count' type='submit'/></p>
    </form>



<hr>
      <p> To find out exact death numbers of countries enter a date: </p>


    <form action='first.php' method='post'>
        <label>Date:         </label><input type='text' name='date' /><br/>
       

        <input name="enter date", value='date' type='submit'/></p>
    </form>


  <hr>
      <p> To Enter Into Vaccine Origin Table: </p>


    <form action='vacc_origin_insert.php' method='post'>
        <label>Vaccine Name:         </label><input type='text' name='vaccine_insert' /><br/>
        <label>Origin:        </label><input type='text' name='origin_insert' /><br/>

        <input name="insert into Vaccine Origin", value='insert into Vaccine Origin Table' type='submit'/></p>
    </form>

  <hr>
      <p> To Enter Into Country Testing Table: </p>


    <form action='country_test_insert.php' method='post'>
        <label>Date:         </label><input type='text' name='date_insert' /><br/>
        <label>Positivity rate:        </label><input type='text' name='pos_rate_insert' /><br/>
        <label>Test Per Case:        </label><input type='text' name='test_per_case_insert' /><br/>
        <label>Country: </label><input type='text' name='country_insert' /><br/>

        <input name="insert into Country Testing", value='insert into Country Testing Table' type='submit'/></p>
    </form>



  <hr>
      <p> To Enter Into Country Statistics Table: </p>


    <form action='country_stat_insert.php' method='post'>
        <label>Continent:         </label><input type='text' name='continent_insert' /><br/>
        <label>Country:        </label><input type='text' name='country_insert' /><br/>
        <label>Population:        </label><input type='text' name='population_insert' /><br/>
        <label>cardiovasc_death_rate: </label><input type='text' name='cardiovasc_insert' /><br/>
        <label>diabetes_prevalence:    </label><input type='text' name='diabetes_insert' /><br/>
        <label>female_smokers:  </label><input type='text' name='female_smokers_insert' /><br/>
        <label>male_smokers:  </label><input type='text' name='male_smokers_insert' /><br/>
        <label>life_expectancy:  </label><input type='text' name='life_expectancy_insert' /><br/>
        <input name="insert into Country Statistics", value='insert into Country Statistics' type='submit'/></p>
    </form>

<hr>
    <p> To Enter Into Daily Table: </p>


  <form action='insertdaily.php' method='post'>
      <label>Date:         </label><input type='text' name='date_insert' /><br/>
      <label>Country:        </label><input type='text' name='country_insert' /><br/>
      <label>New Cases: </label><input type='text' name='new_cases_insert' /><br/>
      <label>New Deaths:    </label><input type='text' name='new_deaths_insert' /><br/>
      <label>Total Cases:  </label><input type='text' name='total_cases_insert' /><br/>
      <label>Total Deaths:  </label><input type='text' name='total_deaths_insert' /><br/>
      <input name="insert into daily", value='insert into daily' type='submit'/></p>
  </form>


  <hr>
  <p> To Enter Into Response Measurements Table: </p>
  <form action='insertresponse.php' method='post'>
    <label>Country:         </label><input type='text' name='country_insert' /><br/>
    <label>Response Measurement:        </label><input type='text' name='response_insert' /><br/>
    <label>Date Start: </label><input type='text' name='start_date_insert' /><br/>
    <label>Date End:    </label><input type='text' name='end_date_insert' /><br/>
    <input name="insert into Response", value='insert into Respons' type='submit'/></p>
  </form>

  <hr>
  <p> To Enter Into Vaccination Table: </p>
  <form action='insertvaccination.php' method='post'>
    <label>Vaccine Name: </label><input type='' name='vaccine_name_insert' /><br/>
    <label>Vaccine Type:  </label><input type='text' name='vaccine_type_insert' /><br/>
    <label>Efficiency Rate: </label><input type='number' name='eff_rate_insert' /><br/>
    <label>Doses Needed:    </label><input type='number' name='doses_insert' /><br/>

    <label>Days Apart:    </label><input type='number' name='days_apart_insert' /><br/>
    <label>Minimum Storage Temperature:    </label><input type='number' name='min_stor_insert' /><br/>
    <label>Maximum Storage Temperature:    </label><input type='number' name='max_stor_insert' /><br/>
    <input name="insert into vaccination", value='insert into vaccination' type='submit'/></p>
  </form>

  <hr>
  <p> To Enter Into Which Vaccine Applied Table: </p>
  <form action='whichvaccine_insert.php' method='post'>
    <label>Country: </label><input type='' name='country_insert' /><br/>
    <label>Year_Week:  </label><input type='text' name='year_week_insert' /><br/>
    <label>First Dose: </label><input type='number' name='first_dose_insert' /><br/>
    <label>Second Dose:    </label><input type='number' name='second_dose_insert' /><br/>

    <label>Number Doses Received:    </label><input type='number' name='num_doses_insert' /><br/>
    <label>Which Vaccine:    </label><input type='number' name='which_vacc_insert' /><br/>
    <input name="insert into which vaccine applied", value='insert into which vaccine applied' type='submit'/></p>
  </form>



</body>



</html>
