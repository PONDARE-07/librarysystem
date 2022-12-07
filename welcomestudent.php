<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])&& isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {   ?>



<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Asistencia-akalatan-student</title>
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
          <a class="nav-link active" aria-current="page" href="welcomestudent.php">Home</a>
        </li>
        <li class="nav-item">
          <a href="welcomestudentannounce.php" class="notification">
          <a class="nav-link" href="welcomestudentannounce.php">Announcement</a><span class="badge">
           
              <?php
               $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT COUNT(id) AS Num FROM announcement";
                              ?>  
          
          </span>
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



<div class="bgimg-2">
 <div class="caption">
    <br><br><br>
 <!-- <center> <b><span  style="background-color:transparent;font-size:40px;color: #FFFFFF;">Welcome To Asistencia Aklatan</b></span></center> -->
 <div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
    <div class="col">
       <center><div class="card bg-success" style="width: 18rem;">
        <center><img src="library.png" class="card-img-top" alt="..." style="width:120px ;"></center>
        <div class="card-body">
          <h5 class="card-title">ON-SITE</h5>
          <p class="card-text">Welcome to Library!</p>
          <a href="#" class="btn bg-light" data-bs-toggle="modal" data-bs-target="#onsite">Avail Service</a>
        </div>
      </div>
</center>

    </div>
    <div class="col">
      <center><div class="card bg-warning" style="width: 18rem;">
  <center><img src="group-chat.png" class="card-img-top" alt="..." style="width:120px ;"></center>
  <div class="card-body" >
    <h5 class="card-title">ONLINE</h5>
    <p class="card-text">Welcome to Library!</p>
    <a href="#" class="btn bg-light" data-bs-toggle="modal" data-bs-target="#online">See More</a>
  </div></center>
</div>
    </div>

  </div>
  </div>
</div>
</div>

<div class="footer" style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;">
  <h6 style="text-align:center;" >© 2022 Asistencia Aklatan | By : Business Analytics Students</h6>

</div>


<div class="modal fade" id="onsite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Service needed</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="onsiteprocess.php" method="post">
         <div class="mb-3">
         <input type="text" name="sr_code" hidden value="<?php echo $_SESSION['username']?>"/>
         <input type="text" name="full_name" hidden value="<?php echo $_SESSION['firstname'];
                                                                 echo $_SESSION['lastname']?>"/>
         <input type="checkbox" name="box[]" id="inter" value="Internet Services"/>
          <label for="inter" class="form-label"> Internet Services</label>
         </div>
          <div class="mb-3">
         <input type="checkbox" name="box[]" id="inter" value="Circulation Services"/>
          <label for="inter" class="form-label"> Circulation Services</label>
         </div>
          <div class="mb-3">
         <input type="checkbox" name="box[]" id="inter" value="Referral Services"/>
          <label for="inter" class="form-label"> Referral Services</label>
         </div>
         <div class="mb-3">
         <input type="checkbox" name="box[]" id="inter" value="Certification Request"/>
          <label for="inter" class="form-label"> Certification Request</label>
         </div>
         <div id="emailHelp" class="form-text"><center>Please take note that your account will automatically log out after selecting any services</center></div>
         <center><button type="submit" class="btn btn-danger">Login</button></center>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="online" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Online</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="onlinever.php" method="post">
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Password</label>
             <input type="hidden" class="form-control"  aria-describedby="emailHelp" name="sr_code" value="<?php echo $_SESSION['username']?>">
             <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
           </div>  
           <center><button type="submit" class="btn btn-primary">Submit</button></center>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <!--       <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>



</body>
</html>



<?php }else{
  header("Location: index.php");
} ?>