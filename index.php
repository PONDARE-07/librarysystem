<?php 
   session_start();
   if (!isset($_SESSION['username'])) {   ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- LINK PARA SA CHART -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <style type="text/css">
    #rcorners3 {
     clip-path: polygon(0 0, 100% 0%, 79% 100%, 0% 100%);
      background-color: #C21807;
/*      padding: 20px; */
      width: 500px;
      height: 150px;
      align-content: center; 
    }
     .bgimg-2{
  position: relative;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }
    .bgimg-2 {
      background-image: url("paral3.jpg");
      min-height: 450px;
    } 

  </style>
</head>
<body>

<div style="text-align:center;height:193px;text-align: justify; background-color: #c30010; color: white;background-image: url('back11.jpg');background-size: cover;">

<br>
<div id="rcorners3"><center><br><img src="banner_library.png" style="width:350px;"></center>
</div>
</div>

<ul class="nav justify-content-center bg-dark py-3">

  <li class="nav-item">

    <img src="logo.png" style="width:40px;">
   
  </li>
  <li class="nav-item">

    <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="offcanvas" data-bs-target="#admin" aria-controls="offcanvasRight" style="color: white;">LIBRARIAN</a>


  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" style="color: white;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">STUDENT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" style="color:  white;" data-bs-toggle="offcanvas" data-bs-target="#faculty" aria-controls="offcanvasRight">FACULTY/INSTRUCTOR</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#"  style="color: white;" data-bs-toggle="offcanvas" data-bs-target="#visitor" aria-controls="offcanvasRight">VISITOR</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#" t style="color: white;" data-bs-toggle="offcanvas" data-bs-target="#timeout" aria-controls="offcanvasRight">TIME OUT</a>
  </li>
</ul>
<div class="bgimg-2">
 <div class="caption">
    <br><br><br><br><br><br><br><br>
 <center> <b><span  style="background-color:transparent;font-size:40px;color: #FFFFFF;">Welcome To Asistencia Aklatan</b></span></center>
  </div>
</div>






<div style="text-align:center;padding:10px 80px;text-align: justify; background-color:#C34A2C ; color:white ">
  <h3 style="text-align:center;" >MISSION AND VISION</h3>
  
</div>

  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        MISSION
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        The Batangas State University ARASOF-Nasugbu Library is committed to continuously develop, organize and provide access to relevant resources and innovative services in support of the different curricula and programs of the University making it responsive to the institution's mission of developing productive citizens.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        VISION
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">The Batangas State University ARASOF-Nasugbu Library envisions to be the intellectual center of the university by obtaining world-class library collection necessary in the development of efective leaders and professionals.</div>
    </div>
  </div>

</div>








<!-- para sa faculty -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="faculty" aria-labelledby="offcanvasRightLabel" style="border: 3px solid red;">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Faculty</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form>
  <div class="mb-3">
   <center> <img src="instructor.png" style="width:90px;"></center>

    <b><label for="exampleInputEmail1" class="form-label">Username</label></b>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
   
  </div>
 <b><label for="exampleInputEmail1" class="form-label">PASSWORD</label></b>
 <div class="input-group mb-3">

          <input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password"  required />
          <span class="input-group-text togglePassword" id="">
              <i data-feather="eye" style="cursor: pointer"></i>
          </span>
      </div>
  
 
 <center> <button type="submit" class="btn btn-danger rounded-pill px-5">Login</button></center>
</form>
  </div>
</div>

<!-- para sa admin -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="admin" aria-labelledby="offcanvasRightLabel" style="border: 3px solid red;">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">LIBRARIAN & ADMIN</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
       <br>
    <form action="loginadmin.php" method="post">
  <div class="mb-3">
   <center> <img src="Avatar.png" style="width:90px;"></center>

    <b><label for="exampleInputEmail1" class="form-label">Username</label></b>
    <input type="email" class="form-control" id="username1" name="username1" placeholder="Username" required>
   
  </div>
  <b><label for="exampleInputEmail1" class="form-label">PASSWORD</label></b>
 <div class="input-group mb-3">

          <input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password1"  required />
          <span class="input-group-text togglePassword" id="">
              <i data-feather="eye" style="cursor: pointer"></i>
          </span>
      </div>
   <div class="mb-3">
            <b><label for="exampleInputPassword1" class="form-label">Select User Type:</label></b>
          </div>
          <select class="form-select mb-3"
                  name="role" 
                  aria-label="Default select example">
              <option selected value="librarian">Librarian Staff</option>
              <option value="admin">Admin</option>
          </select>
 
 <center> <button type="submit" class="btn btn-danger rounded-pill px-5">Login</button></center>
</form>
  </div>
</div>

<!-- para sa student -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="border: 3px solid red;">
  <div class="offcanvas-header" >
    <h5 id="offcanvasRightLabel"> <b>STUDENT LOGIN</b></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <br>
    <form
        action="studentlogin.php" method="post">
  <div class="mb-3">
   <center> <img src="spartan.png" style="width:120px;"></center>
    <b><label for="exampleInputEmail1" class="form-label">SR-CODE</label></b>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="code" required>
   
  </div>
  <b><label for="exampleInputEmail1" class="form-label">PASSWORD</label></b>
 <div class="input-group mb-3">

          <input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password"  required />
          <span class="input-group-text togglePassword" id="">
              <i data-feather="eye" style="cursor: pointer"></i>
          </span>
      </div>
  
 <br>
 <center> <button type="submit" class="btn btn-danger rounded-pill px-5">Login</button></center>
</form>
    <br>
  </div>
</div>
<!-- para sa mga visitor -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="visitor" aria-labelledby="offcanvasRightLabel" style="border: 3px solid red;">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Visitor </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <br>
    <form name="dept" method="post" action="visitsert.php">
  <div class="mb-3">
   <center> <img src="visitor.png" style="width:90px;"></center>

    <b><label for="">Visitors Name  </label>
          <input type="text" class="form-control" id="visits" name="visits" autocomplete="off" placeholder="Visitors Name" required />
   
  </div>
  <div class="mb-3">
            <b><label  class="form-label">Select Transaction:</label></b>
            <select name="transaction" class="form-control">
               <option selected value="internet">Internet</option>
               <option selected value="visitation">Visitation</option>
               <option selected value="referral">Referral</option>
               <option selected value="evaluate">Evaluate</option>
              <option selected value="others">Others</option>
          </select>
   
 </div>
 <center> <button type="submit" class="btn btn-danger rounded-pill px-5">Submit</button></center>
</form>
  </div>
</div>

<!-- timeout  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="timeout" aria-labelledby="offcanvasRightLabel" style="border: 3px solid red;">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Timeout</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <br>
     <center> <img src="clock.png" width="150px"></center>
    <form action="timeout2process.php"method="post" autocomplete="off">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><b>SR-CODE</b></label>
          <input type="text" class="form-control" name="code" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
        
        </div>
        <b><label for="exampleInputEmail1" class="form-label">PASSWORD</label></b>
 <div class="input-group mb-3">

          <input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password"  required />
          <span class="input-group-text togglePassword" id="">
              <i data-feather="eye" style="cursor: pointer"></i>
          </span>
      </div>
        
        <center><button type="submit" class="btn btn-danger rounded-pill px-5">Submit</button></center>
      </form>
  </div>
</div>
</body>
<script type="text/javascript">
    feather.replace({ 'aria-hidden': 'true' });

$(".togglePassword").click(function (e) {
      e.preventDefault();
      var type = $(this).parent().parent().find(".password").attr("type");
      console.log(type);
      if(type == "password"){
          $("svg.feather.feather-eye").replaceWith(feather.icons["eye-off"].toSvg());
          $(this).parent().parent().find(".password").attr("type","text");
      }else if(type == "text"){
          $("svg.feather.feather-eye-off").replaceWith(feather.icons["eye"].toSvg());
          $(this).parent().parent().find(".password").attr("type","password");
      }
  });
</script>
</html>

<?php }else{
  header("Location: index.php");
} ?>

