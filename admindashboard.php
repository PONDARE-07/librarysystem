<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asistencia Aklatan Admin</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- LINK PARA SA CHART -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body >
<div style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;">
  <!-- <h3 style="text-align:center;" >Welcome To Asistencia Aklatan</h3> -->
  <Center><img src="banner_library.png" style="width:150px;"></Center>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo.png" style="width:40px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admindashboard.php" >DASHBOARD</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            RECORDS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="adminrecordstudent.php">Students</a></li>
            <li><a class="dropdown-item" href="adminrecordfaculty.php">Faculty</a></li>
            <li><a class="dropdown-item" href="visitorsrecord.php">Visitors</a></li>
             <li><a class="dropdown-item" href="#">Staff</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HISTORY
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Students</a></li>
            <li><a class="dropdown-item" href="#">Faculty</a></li>
            <li><a class="dropdown-item" href="#">Visitors</a></li>
             <li><a class="dropdown-item" href="#">Staff</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#announce" >ANNOUNCE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page"  href="admintimeout.php">TIMEOUT</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SETTINGS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
            <li><a class="dropdown-item" href="#">CHANGE PASSWORD</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<br>

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col">
    	
    	<div class="card shadow" style="width: 18rem;">
  
  <div class="card-body" style="border-left: 5px solid green;border-top: 5px solid green;">
   
    <div class="container">
  <div class="row">
    <div class="col">
      <center><div class="bg-success text-wrap" style="color: white; font-family: 'Montserrat';">
  ATTENDANCE
</div></center>

    </div>
    <!-- <div class="col">
      <center><img src="bus.png" class="card-img-top" alt="..." style="width:50px;"></center>
    </div> -->
  
  </div>
</div>
<!--  -->

   
    <p style="font-family: 'Montserrat'; text-align:center; color:green;" ><b>
      <br>
      <?php
            $servername = "localhost";
            $username = "root";     //server username
            $password = "";          //server password 
            $dbname = "librarydb";  //database name

            $link = mysqli_connect($servername, $username, $password, $dbname);
            if (!$link) {
              die("Connection failed: " . mysqli_connect_error());
            }
            ?>
            <?php
              $query = "SELECT COUNT(sr_code) AS Num FROM timeintimeout where timeout = '00:00:00'";
              $result = mysqli_query($link, $query);
             while ($row = mysqli_fetch_array($result)) {
              echo $row['Num'];

              }
            ?>                


    </b></p>
    <p class="text-end" style="font-family: 'Montserrat'; color: green;" data-bs-toggle="modal" data-bs-target="#timeout"><b>View More</b><i class="bi bi-caret-right"></i></p>
  </div>
</div>





    </div>
    <div class="col">
    	<div class="card shadow" style="width: 18rem;">
  
  <div class="card-body" style="border-left: 5px solid black;border-top: 5px solid black;">
   
    <div class="container">
  <div class="row">
    <div class="col">
      <center><div class="bg-dark text-wrap" style="color: white; font-family: 'Montserrat';">
  CERTIFICATION
</div></center>

    </div>
   <!--  <div class="col">
      <center><img src="bus.png" class="card-img-top" alt="..." style="width:50px;"></center>
    </div> -->
  
  </div>
</div>

    <p style="font-family: 'Montserrat'; text-align:center;" ><b>
      <br>
      <?php
            $servername = "localhost";
            $username = "root";     //server username
            $password = "";          //server password 
            $dbname = "librarydb";  //database name

            $link = mysqli_connect($servername, $username, $password, $dbname);
            if (!$link) {
              die("Connection failed: " . mysqli_connect_error());
            }
            ?>
            <?php
              $query = "SELECT COUNT(*) AS Num FROM certificationrequest where `image_url` =''";
              $result = mysqli_query($link, $query);
             while ($row = mysqli_fetch_array($result)) {
              echo $row['Num'];

              }
            ?>              


    </b></p>
    <p class="text-end" style="font-family: 'Montserrat'; color: black;" data-bs-toggle="modal" data-bs-target="#certi"><b>View More</b><i class="bi bi-caret-right"></i></p>
  </div>
</div>


    </div>
    <div class="col">
    	
    	<div class="card shadow" style="width: 18rem;">
  
  <div class="card-body" style="border-left: 5px solid red;border-top: 5px solid red;">
   
    <div class="container">
  <div class="row">


    <div class="col">
      <center><div class="bg-danger text-wrap" style="color: white; font-family: 'Montserrat';">
  BOOK REQUEST
</div></center>

    </div>
   <!--  <div class="col">
      <center><img src="bus.png" class="card-img-top" alt="..." style="width:50px;"></center>
    </div> -->
  
  </div>
</div>

   
    <p style="font-family: 'Montserrat'; text-align:center; color: red;" ><b>
      <br>
                       <?php
            $servername = "localhost";
            $username = "root";     //server username
            $password = "";          //server password 
            $dbname = "librarydb";  //database name

            $link = mysqli_connect($servername, $username, $password, $dbname);
            if (!$link) {
              die("Connection failed: " . mysqli_connect_error());
            }
            ?>
            <?php

              $query = "SELECT COUNT(*) As num FROM bookrequest";
              $result = mysqli_query($link, $query);
             while ($row = mysqli_fetch_array($result)) {
              echo $row['num'];
              }
            ?>   


    </b></p>
    <p class="text-end" style="font-family: 'Montserrat'; color: red;" data-bs-toggle="modal" data-bs-target="#viewmorebookrequest"><b>View More</b><i class="bi bi-caret-right"></i></p>
  </div>
</div>
    </div>


    <div class="col">
<div class="card shadow" style="width: 18rem;">
  
  <div class="card-body" style="border-left: 5px solid orange;border-top: 5px solid orange;">
   
    <div class="container">
  <div class="row">
    <div class="col">
      <center><div class="bg-warning text-wrap" style="color: white; font-family: 'Montserrat';">
  ARTICLE REQUEST
</div></center>

    </div>

  
  </div>
</div>

   
    <p style="font-family: 'Montserrat'; text-align:center; color: orange;" ><b>
      <br>
                     <?php
            $servername = "localhost";
            $username = "root";     //server username
            $password = "";          //server password 
            $dbname = "librarydb";  //database name

            $link = mysqli_connect($servername, $username, $password, $dbname);
            if (!$link) {
              die("Connection failed: " . mysqli_connect_error());
            }
            ?>
            <?php


              $query = "SELECT COUNT(*) As num FROM articlerequest where image_url=''";
              $result = mysqli_query($link, $query);
             while ($row = mysqli_fetch_array($result)) {
              echo $row['num'];

              }
            ?>    


    </b></p>
    <p class="text-end" style="font-family: 'Montserrat'; color: orange;" data-bs-toggle="modal" data-bs-target="#viewmorearticle"><b>View More</b><i class="bi bi-caret-right"></i></p>
  </div>
</div>

    </div>

  </div>
</div>

<br>

<div style="text-align:center;padding:10px 80px;text-align: justify; background-color: RED; color: white;">
<center>
<input type="button" name="" value="Print Dashboard" class="btn btn-light" onclick="window.location.replace('printdashboard.php')" />

</center>
 
</div>

<br>
<div class="container" >
  <div class="row row-cols-2">
    <div class="col" >
     <center> <canvas id="myChart" style="width:40%;max-width:600px;border:1px solid #d3d3d3;"></canvas></center>


<script>
var xValues = [<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT datetoday, COUNT(*) as 'number' FROM timeintimeout GROUP by datetoday;";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo "['".$row["datetoday"]."'],";  
                                
                          } ?>];
var yValues = [<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT datetoday, COUNT(*) as 'number' FROM timeintimeout GROUP by datetoday;";  
                           $result1 = mysqli_query($connect, $query);  
                           ?> 
<?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo $row['number'];
                                echo",";
                          } ?>];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(255,0,0,1.0)",
      borderColor: "rgba(255,0,0,1.0)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 0, max:100}}],
    },
     title: {
      display: true,
      text: "TOTAL COUNT OF VISITS PER DAY"
    }

  }
});
</script>

    </div>
    <div class="col">
      <center><canvas id="myChart1" style="width:40%;max-width:600px ;border:1px solid #d3d3d3;" ></canvas></center>

<script>
var xValues = [ <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT `department`, COUNT(*) as num from timeintimeout GROUP by `department`";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo "['".$row["department"]."'],";  
                                
                          } ?>];
var yValues = [<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT `department`, COUNT(*) as num from timeintimeout GROUP by `department`";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>];
var barColors = [
  "#880808",
  "#AA4A44",
  "#FF0000",
  "#D70040",
  "#F88379"
];

new Chart("myChart1", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      
      data: yValues,
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
    }]
  },
  options: {
    title: {
      display: true,
      text: "COUNT PER DEPARTMENT"
    }
  }
});
</script>


    </div>
    <div class="col">
      <center><canvas id="myChart2" style="width:40%;max-width:600px;border:1px solid #d3d3d3;"></canvas></center>

      <script>
      var xValues = [<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT service, COUNT(*) as num FROM timeintimeout GROUP BY service ORDER BY service;";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo "['".$row["service"]."'],";  
                                
                          } ?>];
      var yValues = [<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT service, COUNT(*) as num FROM timeintimeout GROUP BY service ORDER BY service;";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>];
    

      new Chart("myChart2", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
         
            data: yValues,
             backgroundColor: [
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
           'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
           'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)'
         
          
        ],
        borderColor: [
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
           'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
           'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)'
         
        ],
        borderWidth: 1
          }]
        },
        options: {
           scales: {
      yAxes: [{ticks: {min: 0, max:100}}],
    },
          legend: {display: false},
          title: {
            display: true,
            text: "TOTAL COUNT OF SERVICES AVAIL"
          }
        }
      });
      </script>



    </div>
    <div class="col">
      

      <center><canvas id="bar-chart-grouped" style="width=100% ;max-width:600px;border:1px solid #d3d3d3;" ></canvas></center>

<script type="text/javascript">
    new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["CABEIHM","CAS","CICS"],
      datasets: [
        {
          label: "Circulation Services",
         backgroundColor: [
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)'
         
          
        ],
        borderColor: [
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)'
         
        ],
        borderWidth: 1,
          data: [
          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CABEIHM' and service='Circulation Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CAS' and service='Circulation Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CICS' and service='Circulation Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>














          ]
        }, {
          label: "Circulation Services / Referral Services",
         backgroundColor: [
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)'
         
          
        ],
        borderColor: [
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)'
         
        ],
        borderWidth: 1,
          data: [
           <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CABEIHM' and service='Circulation Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CAS' and service='Circulation Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CICS' and service='Circulation Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>










          ]
        },
        {
          label: "Internet Services",
 backgroundColor: [
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)'
         
          
        ],
        borderColor: [
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)'
         
        ],
          data: [

<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CABEIHM' and service='Internet Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CAS' and service='Internet Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CICS' and service='Internet Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>


          ]
        },
         {
          label: "Internet Services / Circulation Services",
         backgroundColor: [
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)'
         
          
        ],
        borderColor: [
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)'
         
        ],
          data: [
<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CABEIHM' and service='Internet Services / Circulation Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CAS' and service='Internet Services / Circulation Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CICS' and service='Internet Services / Circulation Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>




          ]
        },
         {
          label: "Internet Services / Circulation Services / Referral Services",
          backgroundColor: [
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)'
         
          
        ],
        borderColor: [
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)'
         
        ],
          data: [
<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CABEIHM' and service='Internet Services / Circulation Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CAS' and service='Internet Services / Circulation Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CICS' and service='Internet Services / Circulation Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>




          ]
        },
         {
          label: "Internet Services / Referral Services",
           backgroundColor: [
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)'
         
          
        ],
        borderColor: [
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)'
         
        ],
          data: [

<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CABEIHM' and service='Internet Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CAS' and service='Internet Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CICS' and service='Internet Services / Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>



          ]
        },
         {
          label: "Referral Services",
          backgroundColor: [
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)',
          'rgba(255,0,0,0.5)'
         
          
        ],
        borderColor: [
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)',
          'rgba(255,0,0, 1)'
         
        ],
        borderWidth: 1,
          data: [
<?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CABEIHM' and service='Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CAS' and service='Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>
                          <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT department,service, COUNT(*) as num from timeintimeout where department= 'CICS' and service='Referral Services' group by service, department ORDER BY department,service;
";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo $row['num'];
                                echo",";
                                
                          } ?>



          ]
        },
      ]
    },
    options: {
           scales: {
      yAxes: [{ticks: {min: 0, max:100}}],
    },
          legend: {display: false},
          title: {
            display: true,
            text: "TOTAL AVAIL SERVICES PER DEPARTMENT"
          }
        }
});
  </script>
    </div>
  </div>
</div>







<div class="modal fade" id="timeout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TIME IN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col" style='font-size: 14px;'>SR-CODE</th>
      <th scope="col" style='font-size: 14px;'>FULLNAME</th>
      <th scope="col" style='font-size: 14px;'>DEPARTMENT</th>
      <th scope="col" style='font-size: 14px;'>COURSE</th>
      <th scope="col" style='font-size: 14px;'>SERVICE</th>
      <th scope="col" style='font-size: 14px;'>DATE</th>
      <th scope="col" style='font-size: 14px;'>TIME IN</th>
<!--       <th scope="col" style='font-size: 14px;'>TIME OUT</th> -->
    </tr>
  </thead>
  <tbody >
     <?php
            $servername = "localhost";
            $username = "root";     //server username
            $password = "";          //server password 
            $dbname = "librarydb";  //database name

            $link = mysqli_connect($servername, $username, $password, $dbname);
            if (!$link) {
              die("Connection failed: " . mysqli_connect_error());
            }
            ?>
            <?php
            $query = "select * from timeintimeout where timeout ='00:00:00'";
             $result = mysqli_query($link, $query);
             while ($row = mysqli_fetch_array($result)) {
                 echo "<tr>";
                 echo "<td style='font-size: 14px;'><center>".$row['sr_code']."</center></td>";
                 $no = $row['sr_code'];
                 echo "<td style='font-size: 14px;'><center>".$row['name']."</center></td>";
                 echo "<td style='font-size: 14px;'><center>".$row['department']."</center></td>";
                 echo "<td style='font-size: 14px;'><center>".$row['course']."</center></td>";
                 echo "<td style='font-size: 14px;'><center>".$row['service']."</center></td>";
                 echo "<td style='font-size: 14px;'><center>".$row['datetoday']."</center></td>";
                 echo "<td style='font-size: 14px;'><center>".$row['timein']."</center></td>";
                

                 echo "</tr>";
             }

            ?>



            <a href='deleteroute.php?cancelid=".$no."' style='text-decoration:none;color:white;'>Remove</a>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="announce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ANNOUNCEMENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="announcement.php" method="post">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username']?>">

        <label for="floatingTextarea">Date Today</label>
        <input class="form-control" id="disabledInput" type="text" placeholder="<?php $date = date("Y/m/d"); echo $date?>" value="<?php $date = date("Y/m/d"); echo $date?>" name="date" disabled>
        <br>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="subject" required></textarea>
            <label for="floatingTextarea">Subject</label>
        </div>
         <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="comment" required></textarea>
            <label for="floatingTextarea2">Comments</label>
          </div>
   <br>
   <center><button type="submit" class="btn btn-primary">Submit</button></center>
       </form>
        
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     
    </div>
  </div>
</div>
</div>

    <div class="modal fade" id="viewmorearticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Article Request</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table">
               <thead>
               <tr>
               <th scope="col">Date</th>
               <th scope="col">Sr_code</th>
               <th scope="col">Fullname</th>
               <th scope="col">Author</th>
               <th scope="col">Title</th>
               <th scope="col">Journal</th>
               <th scope="col">Volume</th>
               <th scope="col">Num</th>
               <th scope="col">Action</th>
               </tr>
               </thead>
               <tbody>
              <?php
              $servername = "localhost";
              $username = "root";     //server username
              $password = "";          //server password 
              $dbname = "librarydb";  //database name

              $link = mysqli_connect($servername, $username, $password, $dbname);
              if (!$link) {
                die("Connection failed: " . mysqli_connect_error());
              }
              ?>
             <!--  SELECT * FROM `articlerequest` ORDER BY `date`; -->
              <?php

             $query = "select * from articlerequest where image_url='' order by date";
             $result = mysqli_query($link, $query);
             while ($row = mysqli_fetch_array($result)) {
                 echo "<tr>";
                 echo "<td style='font-size: 14px;'>".$row['date']."</td>";
                 echo "<td style='font-size: 14px;'>".$row['sr_code']."</td>";
               echo "<td style='font-size: 14px;'>".$row['fullname']."</td>";
               echo "<td style='font-size: 14px;'>".$row['author']."</td>";
               echo "<td style='font-size: 14px;'>".$row['title']."</td>";
               echo "<td style='font-size: 14px;'>".$row['journal']."</td>";
               echo "<td style='font-size: 14px;'>".$row['volumn']."</td>";
               echo "<td style='font-size: 14px;'>".$row['number']."</td>";
               echo"<td>";
               echo"<form action='upload.php' method='post' enctype='multipart/form-data'>";
               echo"<input type='hidden' name='id' value='".$row['id']."'>";
               echo"<center><input type='file' name='my_image' required></center>";
               echo"<br>";
               echo"<center>";
              echo" <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#message'><i class='bi bi-chat-left-dots'></i>&nbsp;</button>";
              echo" <button type='submit' class='btn btn-success'><i class='bi bi-check2'></i>&nbsp;</button>";
              echo" <button type='button' class='btn btn-danger'><i class='bi bi-file-earmark-x'></i></button>";
              echo"</center>";
              echo "</form>";
              echo"</td>";
              echo"
              <div class='modal fade' id='message' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='exampleModalLabel'>Send Message</h5>
                      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <form action='sendmessage.php' method='post'>
                        <input type='text'  value='".$row['sr_code']."' name='sr_code'>
                        <input type='text'  value='".$row['fullname']."' name='fname'>
                        <br>
                         <textarea class='form-control' placeholder='Leave a message here' id='floatingTextarea2' style='height: 100px' required name='message'></textarea>
                      
                         

                        <center><button type='submit' class='btn btn-success'>Submit</button></center>
                        </form>
                    </div>
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-secondary'data-bs-dismiss='modal'>Close</button>
                   
                    </div>
                  </div>
                </div>
              </div>





              ";
              echo "</tr>";
             }
            ?>
               </tbody>
          </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>

  

    <div class="modal fade" id="viewmorebookrequest"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Request</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table">
               <thead>
               <tr>
               <th scope="col">Date</th>
               <th scope="col">Sr_code</th>
               <th scope="col">Fullname</th>
               <th scope="col">Author</th>
               <th scope="col">Title</th>
               <th scope="col">Journal</th>
               <th scope="col">Volume</th>
               <th scope="col">Num</th>
               <th scope="col">Action</th>
               </tr>
               </thead>
               <tbody>
              <?php
              $servername = "localhost";
              $username = "root";     //server username
              $password = "";          //server password 
              $dbname = "librarydb";  //database name

              $link = mysqli_connect($servername, $username, $password, $dbname);
              if (!$link) {
                die("Connection failed: " . mysqli_connect_error());
              }
              ?>
             <!--  SELECT * FROM `articlerequest` ORDER BY `date`; -->
              <?php

             $query = "SELECT * FROM `bookrequest` ORDER BY `date`;";
             $result = mysqli_query($link, $query);
             while ($row = mysqli_fetch_array($result)) {
                 echo "<tr>";
                 echo "<td style='font-size: 14px;'>".$row['date']."</td>";
                 echo "<td style='font-size: 14px;'>".$row['sr_code']."</td>";
               echo "<td style='font-size: 14px;'>".$row['fullname']."</td>";
               echo "<td style='font-size: 14px;'>".$row['author']."</td>";
               echo "<td style='font-size: 14px;'>".$row['title']."</td>";
               echo "<td style='font-size: 14px;'>".$row['publisher']."</td>";
               echo "<td style='font-size: 14px;'>".$row['place']."</td>";
               echo"<td>";
               echo"<form action='upload.php' method='post' enctype='multipart/form-data'>";
               echo"<input type='hidden' name='id' value='".$row['id']."'>";
               echo"<center><input type='file' name='my_image' required></center>";
               echo"<br>";
               echo"<center>";
              echo" <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#message'><i class='bi bi-chat-left-dots'></i>&nbsp;</button>";
              echo" <button type='submit' class='btn btn-success'><i class='bi bi-check2'></i>&nbsp;</button>";
              echo" <button type='button' class='btn btn-danger'><i class='bi bi-file-earmark-x'></i></button>";
              echo"</center>";
              echo "</form>";
              echo"</td>";
              echo"
              <div class='modal fade' id='message' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='exampleModalLabel'>Send Message</h5>
                      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <form action='sendmessage.php' method='post'>
                        <input type='text'  value='".$row['sr_code']."' name='sr_code'>
                        <input type='text'  value='".$row['fullname']."' name='fname'>
                        <br>
                         <textarea class='form-control' placeholder='Leave a message here' id='floatingTextarea2' style='height: 100px' required name='message'></textarea>
                      
                         

                        <center><button type='submit' class='btn btn-success'>Submit</button></center>
                        </form>
                    </div>
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-secondary'data-bs-dismiss='modal'>Close</button>
                   
                    </div>
                  </div>
                </div>
              </div>





              ";
              echo "</tr>";
             }
            ?>
               </tbody>
          </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>




<div class="modal fade" id="certi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Certificate Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>

    </tr>

  </thead>
  <tbody>

       <?php
              $servername = "localhost";
              $username = "root";     //server username
              $password = "";          //server password 
              $dbname = "librarydb";  //database name

              $link = mysqli_connect($servername, $username, $password, $dbname);
              if (!$link) {
                die("Connection failed: " . mysqli_connect_error());
              }
              ?>
              <?php
             $query = "select * from certificationrequest where image_url='' ORDER by`datee` DESC;";
             $result = mysqli_query($link, $query);
             while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>".$row['datee']."</td>";
              echo "<td>";
     
              echo "<p>Sr_code : ".$row['sr_code']."</p>";
              echo "<p>Fullname :".$row['fname']."</p>";
              echo "<p style = 'font-size:11px';>Thesis Title :".$row['title']."</p>";
              echo "<p>Author :".$row['author']."</p>";
              echo "<p>College :".$row['college']."</p>";
              echo "<p>Degree :".$row['degree']."</p>";
              echo "<p>Year :".$row['year']."</p>";
              echo "<td>";
              $sd = $row['id'];
              // echo $sd;
              echo "<form action='generatecert.php' method='post' enctype='multipart/form-data'>";
              echo"<input type='hidden' value='".$sd."' name='sr'>";
              // echo"<input type='hidden' value'".$row['id']."' name ='code'>";
              echo"<center><button type='submit' class='btn btn-success'><i class='bi bi-file-earmark-pdf'>Generate</i></button></center>";
              echo "</form>";
              echo"<hr>";
              echo"<form action='sendcert.php' method='post' enctype='multipart/form-data'>";
              echo"<br>";
              echo"<input type='hidden' name='id' value='".$row['id']."'>";
              echo"<center><input type='file' name='my_image' required></center>";
echo"<center><button type='submit' class='btn btn-warning'><i class='bi bi-file-earmark-arrow-up'>&nbsp;Upload&nbsp;</i></button></center>";
              echo"</form>";
echo"<hr>";
              echo "<form action='' method='post' enctype='multipart/form-data'>";
               echo"<br>";
              echo"<center> <button type='button' class='btn btn-danger'><i class='bi bi-file-earmark-x'>&nbsp;Delete&nbsp;&nbsp;</i></button></center>";
              echo "</form>";
echo"<hr>";
              echo "</td>";
              echo "</td>";
              echo "</tr>";
            }
              ?>  
      
   
   
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php }else{
  header("Location: index.php");
} ?>