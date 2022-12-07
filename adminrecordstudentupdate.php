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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Record Students Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>
    <style type="text/css">
      .content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}
    </style>
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
            <li><a class="dropdown-item" href="#">Visitors</a></li>
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



<div class="content">
  <form action="adminrecordstudentupdateprocess.php" 
              method="post">
  <div class="mb-3">
    <center><label for="exampleInputEmail1" class="form-label">Sr-code</label></center>
    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php $id=$_GET['editid']; echo $id;?>"name="sr-code" aria-describedby="emailHelp" readonly>
  
  </div>
  <div class="mb-3">
    <center><label for="exampleInputPassword1" class="form-label">First Name</label></center>
    <input type="text" class="form-control" id="exampleInputPassword1" name="firstname" 
    value="<?php $servername = "localhost";
                $username = "root";     //server username
                $password = "";          //server password 
                $dbname = "librarydb";  //database name
                $link = mysqli_connect($servername, $username, $password, $dbname);
                if (!$link) {
                  die("Connection failed: " . mysqli_connect_error());
                }
            ?><?php
            $del = $_GET['editid'];
            $query = "select * from student_information where sr_code='$del'";
              $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_assoc($result)){echo $row['firstname'];}?>">
  </div>
  <div class="mb-3">
    <center><label for="exampleInputPassword1" class="form-label">Last Name</label></center>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lastname" 
    value="<?php $servername = "localhost";
                $username = "root";     //server username
                $password = "";          //server password 
                $dbname = "librarydb";  //database name
                $link = mysqli_connect($servername, $username, $password, $dbname);
                if (!$link) {
                  die("Connection failed: " . mysqli_connect_error());
                }
            ?><?php
            $del = $_GET['editid'];
            $query = "select * from student_information where sr_code='$del'";
              $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_assoc($result)){echo $row['lastname'];}?>">
  </div>
    <div class="mb-3">
 
    <center><label for="exampleInputPassword1" class="form-label">Deparment</label></center>
          
          <select class="form-select mb-3" name="department" aria-label="Default select example">    
               <!-- <option selected value="visitation">Visitation</option> -->
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
            $query = "select * from department";
              $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_assoc($result)){

                  echo "<option value=".$row['department_id'].">".$row['department_name']."</option>";

                }
            ?>
          <!--     <option value="others">Others</option> -->
          </select>
  </div>
   <div class="mb-3">
<!--     <center><label for="exampleInputPassword1" class="form-label">Program</label></center>
    <input type="text" class="form-control" id="exampleInputPassword1" name="program">
 -->

    <center><label for="exampleInputPassword1" class="form-label">Program</label></center>
          
          <select class="form-select mb-3" name="program1" aria-label="Default select example">    
               <!-- <option selected value="visitation">Visitation</option> -->
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
            $query = "select * from program";
              $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_assoc($result)){

                  echo "<option value=".$row['id'].">".$row['program_name']."</option>";

                }
            ?>
          <!--     <option value="others">Others</option> -->
          </select>
  </div>
  <div class="mb-3">
    <center><label for="exampleInputPassword1" class="form-label">Section</label></center>
    <input type="text" class="form-control" id="exampleInputPassword1" name="section">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>