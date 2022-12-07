<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])&& isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asistencia-aklatan-timeout</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>
    <style>
        .bgimg-2{
  position: relative;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
    .bgimg-2 {
      background-image: url("paral2.jpg");
      min-height: 400px;
    }
    
  .menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}
.heading{
    text-align: center;
    color:#000000;
    text-transform: uppercase;
    padding-bottom: 0.5rem;
    font-size: 2rem;
}

.menu .box-container .box{
    padding:1rem;
    text-align: center;
    border:var(--border);    
}

.menu .box-container .box img{
    height: 15rem;
}

.menu .box-container .box h3{
    color: #fff;
    font-size: 2rem;
    padding:1rem 0;
}

.menu .box-container .box:hover{
    background:#fff;
}

.menu .box-container .box:hover > *{
    color:var(--black);
}


</style>
</head>
<body>
	<div style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;">
  <!-- <h3 style="text-align:center;" >Welcome To Asistencia Aklatan</h3> -->
  <br>
  <Center><img src="banner_library.png" style="width:150px;"></Center>
  <br>
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
          <form class="d-flex" action="logout.php">
        <a class="nav-link" href="#" style="text-decoration: none;color: white;">Welcome , <?php echo $_SESSION['firstname'];
        echo " ";
echo $_SESSION['lastname']?></a>
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
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
      <th scope="col" style='font-size: 14px;'>TIME OUT</th>
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
            $code = $_SESSION['username'];
            $query = "select * from timeintimeout where timeout ='00:00:00' and sr_code='$code'";
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
                 echo "<td style='font-size: 14px;'><center><button type='button' class='btn btn-danger'
data-bs-toggle='modal' ' data-bs-dismiss='modal' data-bs-target='#timeout2'
                  >
                Timeout
                 </button></center></td>";

                 echo "</tr>";
             }

            ?>



          <!--   <a href='deleteroute.php?cancelid=".$no."' style='text-decoration:none;color:white;'>Remove</a> -->
  </tbody>
</table>
<div class="modal fade" id="timeout2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Enter your Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="timeout.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">SR_CODE</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sr_code" >
    
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
       
        <center><button type="submit" class="btn btn-primary">Submit</button></center>
      </form>






          <!-- <a href='timeout.php?timeout=".$no."' style='text-decoration:none;'>Timeout</a>      </div> -->


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php }else{
  header("Location: index.php");
} ?>