<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])&& isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {   ?>



<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Asistencia-akalatan-student-announcement</title>
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
          <a class="nav-link"  href="welcomestudent.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcomestudentannounce.php">Announcement</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="welcomestudentlog.php">TimeIn &TimeOut</a>
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




<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="nasugbu.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="nasugbu.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="nasugbu.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
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
$sql = "SELECT * FROM `announcement` ORDER BY `id` DESC;";
$result = mysqli_query($link, $sql);
      while ($row = mysqli_fetch_array($result)) {
      echo"<div style='text-align:center;padding:20px 100px;text-align: justify;  color: white; 
       margin-top: 20px;
        margin-bottom: 20px;
        margin-right: 100px;
        margin-left: 100px;
        border-radius: 50px 20px;
         border-style: solid;
        border-color: #C34A2C;
      ''>";
      echo" <h3 style='text-align:center; color: #C34A2C;' >".$row['subject']."</h3>";
      echo"<p style='color: #C34A2C;'>Date: ".$row['date']."</p>";
       echo"<p style='color: #C34A2C;'>Announced by :".$row['username']."</p>";
      echo" <div style='text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;'>";
      echo"<p>".$row['message']."</p>";
      echo"</div></div>";

}
?>
<!-- <div style="text-align:center;padding:20px 80px;text-align: justify;  color: white; 
 margin-top: 20px;
  margin-bottom: 20px;
  margin-right: 20px;
  margin-left: 20px;
  border-radius: 50px 20px;
   border-style: solid;
  border-color: #C34A2C;
"> -->
  <!-- <h3 style="text-align:center; color: #C34A2C;" >NEWS</h3> -->
  <!-- <div style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;"> -->
 <!-- <p></p> -->
<!-- </div>
</div> -->


</body>
</html>



<?php }else{
  header("Location: index.php");
} ?>