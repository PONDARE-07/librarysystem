

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Timeout </title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>

     <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
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
                                      <th scope="col" style='font-size: 14px;'>SR-CODE</th>
								      <th scope="col" style='font-size: 14px;'>FULLNAME</th>
								      <th scope="col" style='font-size: 14px;'>DEPARTMENT</th>
								      <th scope="col" style='font-size: 14px;'>COURSE</th>
								      <th scope="col" style='font-size: 14px;'>SERVICE</th>
								      <th scope="col" style='font-size: 14px;'>DATE</th>
								      <th scope="col" style='font-size: 14px;'>SECTION</th>
								      <th scope="col" style='font-size: 14px;'>TIME IN</th>
								      <th scope="col" style='font-size: 14px;'>TIME OUT</th>
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
                            
            $query = "select * from timeintimeout ";

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
                  echo "<td style='font-size: 14px;'><center>".$row['section']."</center></td>";
                 echo "<td style='font-size: 14px;'><center>".$row['timein']."</center></td>";
                 echo "<td style='font-size: 14px;'><center>".$row['timeout']."</center></td>";

                 echo "</tr>";
             }
                         //        $con = mysqli_connect('localhost','root','','librarydb');
                         // $query = "SELECT si.sr_code, 
                         //            si.firstname,
                         //            si.lastname, 
                         //            d.department_name, 
                         //            p.program_name,
                         //            si.section    
                         //            FROM `student_info` AS si LEFT JOIN program p 
                         //            ON p.id = si.program_code 
                         //            LEFT JOIN department d 
                         //            ON d.department_id = si.department_id
                         //            GROUP BY si.sr_code";

                         //        $result = mysqli_query($con, $query);

                         //        while($row = mysqli_fetch_assoc($result)){
                         //            echo "<tr>";
                         //            echo "<td>".$row["sr_code"]."</td>";
                         //            $sr_cord = $row['sr_code'];
                         //            echo "<td>".$row["firstname"]."</td>";
                         //            echo "<td>".$row["lastname"]."</td>";
                         //            echo "<td>".$row["department_name"]."</td>";
                         //            echo "<td>".$row["program_name"]."</td>";
                         //            echo "<td>".$row["section"]."</td>";
                         //            echo "<td><a class='btn btn-primary btn-sm' href='adminrecordstudentupdate.php?editid=".$sr_cord."'>Edit</a>
                         //            <a class='btn btn-danger btn-sm' href='adminrecordstudentdelete.php?cancelid=".$sr_cord."'>Delete</a></td>";
                         //            echo "</tr>";
                                
                            ?>

                            </tbody>

                        </table>
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