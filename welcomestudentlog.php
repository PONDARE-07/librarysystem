<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])&& isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {   ?>



<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Asistencia-akalatan-student-Log</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>
    <style>
.footer {
 
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>
</head>
<body >
<div style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;">
  <h3 style="text-align:center;" >Welcome To Asistencia Aklatan</h3>
<Center><img src="banner_library.png" style="width:150px;"></Center>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo.png" style="width:40px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="welcomestudent.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="welcomestudentannounce.php">Announcement</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcomestudentlog.php">TimeIn &TimeOut</a>
        </li>
        
       
       
      </ul>
      <form class="d-flex" action="logout.php">
        <a class="nav-link" href="#" style="text-decoration: none;color: white;">Welcome , <?php echo $_SESSION['firstname'];
echo $_SESSION['lastname']?></a>
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>



<br>

<table class="table">
  <thead>
    <tr>
<!--       <th scope="col">#</th> -->
      <th scope="col">SR_CODE</th>
      <th scope="col">FULL NAME</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">SERVICES</th>
      <th scope="col">COURSE</th>
      <th scope="col">DATE</th>
      <th scope="col">TIME IN</th>
      <th scope="col">TIME OUT</th>
      

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
    $code = $_SESSION['username'];

   // echo $code;

   // SELECT * FROM `timeintimeout` WHERE `sr_code` ='19-76109' ;
     $query = "select * FROM timeintimeout WHERE sr_code = '$code' ORDER BY id DESC";
     $result = mysqli_query($link, $query);   
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
       // echo "<td><center>".$row['id']."</center></td>";
        echo "<td><center>".$row['sr_code']."</center></td>";
          echo "<td><center>".$row['name']."</center></td>";
            echo "<td><center>".$row['department']."</center></td>";
               echo "<td><center>".$row['service']."</center></td>";
               echo "<td><center>".$row['course']."</center></td>";
               echo "<td><center>".$row['datetoday']."</center></td>";
                       echo "<td><center>".$row['timein']."</center></td>";
      echo "<td><center>".$row['timeout']."</center></td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>


</body>
</html>



<?php }else{
  header("Location: index.php");
} ?>