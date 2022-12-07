<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Print Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

	  <script type="text/javascript">
  <!--
  
  //-->
  function myFunction() {
   window.print();
}
  </script>

  <style type="text/css" media="print">
    @media print{
        .noprint, .noprint *{
          display: none; !important;
        }
      }
  </style>
</head>
<body>
	<div style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;">
 <Center><img src="banner_library.png" style="width:150px;"></Center>
</div>
<br>
<center><input type="button" name="" value="&nbsp; Print &nbsp;" class="btn btn-primary noprint" onclick="myFunction()"  />
<input type="button" name="" value="&nbsp; Back &nbsp;&nbsp;" class="btn btn-success noprint" onclick="window.location.replace('admindashboard.php')"/></center>
    <center>  <canvas id="myChart" style="width:100%;max-width:900px"></canvas></center>
    <br>
      <center><canvas id="myChart1" style="width:100%;max-width:900px"></canvas></center>
      
      <center> <canvas id="myChart2" style="width:100%;max-width:900px"></canvas></center>
      <center> <canvas id="bar-chart-grouped" style="width:100%;max-width:900px" ></canvas> </center>


<div class="container">
  <div class="row row-cols-2">
    <div class="col">

      
<!-- <canvas id="myChart" style="width:40%;max-width:600px"></canvas> -->


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
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 1, max:100}}],
    }
  }
});
</script>

    </div>
    <div class="col">

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
  "#2b5797",
  "#b91d47",
  "#00aba9",
  
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart1", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
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
      var barColors = ["#3e95cd","#8e5ea2","#32a889","#1a6f75","#2a72d1","#9927ab","#bf1157"];

      new Chart("myChart2", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          legend: {display: false},
          title: {
            display: true,
            text: "Total Count of Services avail"
          }
        }
      });
      </script>



    </div>
    <div class="col">
      


<script type="text/javascript">
    new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["CABEIHM","CAS","CICS"],
      datasets: [
        {
          label: "Circulation Services",
          backgroundColor: "#3e95cd",
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
          backgroundColor: "#8e5ea2",
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
          backgroundColor: "#32a889",
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
          backgroundColor: "#1a6f75",
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
          backgroundColor: "#2a72d1",
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
          backgroundColor: "#9927ab",
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
          backgroundColor: "#bf1157",
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
      title: {
        display: true,
        text: 'Highest avail services per department'
      }
    }
});
  </script>
    </div>
  </div>
</div>

</body>
</html>