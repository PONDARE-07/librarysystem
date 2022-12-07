<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Records Faculty</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>
</head>
<body>
<div style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;">
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
<center><h4 class="page-head-line" style="color: #C34A2C;">Faculty Records</h4></center>

<hr style="border-top: 3px solid #C34A2C;">

<center>
  
  <form method="post" action="inserted.php" enctype="multipart/form-data" class="btn btn-primary">
 <input type="file" name="file" class="" />
 <input type="submit" name="submit_file" value="Submit" class="btn btn-danger" />
<input type="button" name="" value="Print" class="btn btn-success" onclick="window.location.replace('printstudentrecord.php')" />
 
 </form>

</center>
</body>
</html>
<?php }else{
  header("Location: index.php");
} ?>