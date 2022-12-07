<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Records Student</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>

     <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />



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
<center><h4 class="page-head-line" style="color: #C34A2C;">Student Records</h4></center>

<hr style="border-top: 3px solid #C34A2C;">

<center>
  
	<form method="post" action="inserted.php" enctype="multipart/form-data" class="btn btn-primary">
 <input type="file" name="file" class="" />
 <input type="submit" name="submit_file" value="Submit" class="btn btn-danger" />
<input type="button" name="" value="Print" class="btn btn-success" onclick="window.location.replace('printstudentrecord.php')" />
 
 </form>

</center>
<div style="text-align:center;padding:15px 70px;text-align: justify;  color: white;">


<div class = "col-lg-12 well" style = "margin-top:10px;">
                <div id = "book_table">
                    <!-- <div class="panel-heading">
                           Student Listing
                        </div> -->
                      <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead class = "alert-success">
                                <tr>
                                    <th>SR_CODE</th>
                                    <th>FIRSTNAME</th>
                                    <th>LASTNAME</th>
                                    <th>DEPARTMENT</th>
                                    <th>PROGRAM</th>
                                    <th>SECTION</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $con = mysqli_connect('localhost','root','','librarydb');
                         $query = "SELECT * From student_info";

                                $result = mysqli_query($con, $query);

                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    $id = $row['id'];
                                    echo "<td>".$row["sr_code"]."</td>";
                                    echo "<td>".$row["firstname"]."</td>";
                                    echo "<td>".$row["lastname"]."</td>";
                                    echo "<td>".$row["department_id"]."</td>";
                                    echo "<td>".$row["program_code"]."</td>";
                                    echo "<td>".$row["section"]."</td>";
                                    echo "<td>
                                    <a class='btn btn-danger btn-sm' href='adminrecordstudentdelete.php?cancelid=".$id."'>Delete</a></td>";
                                    echo "</tr>";
                                }
                            ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php }else{
  header("Location: index.php");
} ?>