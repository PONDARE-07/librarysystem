<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])&& isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asistencia aklatan Online version</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body style="background-color: #808080;">
<div style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;">
  <h3 style="text-align:center;" >Asistencia Aklatan Student Online Version</h3>
<Center><img src="banner_library.png" style="width:150px;"></Center>

</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo.png" style="width:40px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="studentonline.php">PROFILE</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVICES
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#certi">CERTIFICATION</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#digital">DIGITAL SERVICES</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://library.upou.edu.ph/web-online-public-access-catalog-opac/">OPAC</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://library.batstate-u.edu.ph/#/main/home">VIRTUAL REFENCE</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#notification ">NOTIFICATION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#anoun">ANNOUNCEMENT</a>
        </li>
 <li class="nav-item">
          <a class="nav-link" href="studentonlinehistory.php">REQUEST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">HISTORY</a>
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
<div class="container">
  <div class="row row-cols-2">
    <div class="col-8">
    	
    	<div style="text-align:center;padding:20px 80px;text-align: justify;  color: white; 
 margin-top: 5px;
  margin-bottom: 0px;
  margin-right: 50px;
  margin-left: -100px;
  border-radius: 50px 20px;
   border-style: solid;
  border-color: #C34A2C;
  background-color: #FFFFFF;
">
  <h3 style="text-align:center; color: #C34A2C;" >PROFILE</h3>
  <div style="text-align:center;padding:5px 60px;text-align: justify; color: darkred; ">
 <div class="container">
  
  <div class="row">
    <div class="col-4">
    	<div class="card" style="width: 9.5rem;">
		  <img src="profile.png" class="card-img-top" style="width:150px ;">
		</div>
    </div>
    <div class="col-8">
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
            	$sr = $_SESSION['username'];
            	$sql = "SELECT si.sr_code, 
                                    si.firstname,
                                    si.lastname,
                                    si.password, 
                                    d.department_name, 
                                    p.program_name,
                                    si.section    
                                    FROM `student_info` AS si LEFT JOIN program p 
                                    ON p.id = si.program_code 
                                    LEFT JOIN department d 
                                    ON d.department_id = si.department_id
                                    where si.sr_code = '$sr'
                                    GROUP BY si.sr_code";
            	$result = mysqli_query($link, $sql);
            	  while ($row = mysqli_fetch_array($result)) {

            	  	echo "<b><p> SR-CODE    :</b> ".$row['sr_code']."</p>";
            	  	echo "<b><p> FIRST NAME :</b> ".$row['firstname']."</p>";
            	  	echo "<b><p> LAST NAME :</b> ".$row['lastname']."</p>";
                  $pas = md5($row['password']);
            	  	echo "<b><p> PASSWORD :</b>".$pas."</p>";
            	  	echo "<b><p> DEPARTMENT :</b> ".$row['department_name']."</p>";
            	  	echo "<b><p> PROGRAM :</b> ".$row['program_name']."</p>";
            	  	echo "<b><p> SECTION :</b> ".$row['section']."</p>";
            	  	echo "<center><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editprofile'>EDIT</button></center>";
            	  }
            ?>
    	
    </div>
  </div>
</div>
</div>
</div>



    </div>
    <div class="col-4">
    	

<div style="text-align:center;padding:20px 80px;text-align: justify;  color: white; 
 margin-top: 5px;
  margin-bottom: 0px;
  margin-right: -100px;
  margin-left: -70px;
  border-radius: 50px 20px;
   border-style: solid;
  border-color: #C34A2C;
  background-color: #FFFFFF;
">
  <h3 style="text-align:center; color: #C34A2C;" >GRAPH</h3>
  <div style="text-align:center;padding:71px 0px;text-align: justify; background-color: #ffffff; color: white; margin: 0;">

<canvas id="myChart" style="width:150%;max-width:700px"></canvas>

<script>
var xValues = [
						   <?php  
               $sr= $_SESSION['username'];
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT datetoday, COUNT(*) as 'number' FROM timeintimeout where sr_code='$sr' GROUP by datetoday;";  
                           $result = mysqli_query($connect, $query);  
                           ?>
                           <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                                echo "['".$row["datetoday"]."'],";  
                                
                          } ?>


];
var yValues = [
           <?php  
                           $connect = mysqli_connect("localhost", "root", "", "librarydb");  
                           $query = "SELECT datetoday, COUNT(*) as 'number' FROM timeintimeout where sr_code='$sr' GROUP by datetoday;";  
                           $result1 = mysqli_query($connect, $query);  
                           ?> 
<?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo $row['number'];
                                echo",";
                          } ?>
                           ];

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
      yAxes: [{ticks: {min: 0, max:20}}],
    }
  }
});
</script>
</div>
</div>
    </div>
    <div class="col-8">
    	

<div style="text-align:center;padding:20px 80px;text-align: justify;  color: white; 
 margin-top: 1px;
  margin-bottom: 0px;
  margin-right: 50px;
  margin-left: -100px;
  border-radius: 50px 20px;
   border-style: solid;
  border-color: #C34A2C;
  background-color: #FFFFFF;
">
  <h3 style="text-align:center; color: #C34A2C;" >LAST TIME IN AND TIME OUT</h3>
  <div style="text-align:center;padding:0px 50px;text-align: justify; background-color: #C34A2C; color: white;">
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
            $sr = $_SESSION['username'];
            $sql = "SELECT * FROM `timeintimeout` WHERE `sr_code` ='$sr' ORDER by id DESC LIMIT 1";
			$result = mysqli_query($link, $sql);
            	  while ($row = mysqli_fetch_array($result)) {
            	 echo "<p style='text-align:center;'>Date :".$row['datetoday'];
            	  	echo " / ";
            	  	echo "Time In : ";
            	  	echo $row['timein'];
            	  	echo " / ";
            	  	echo "Time Out : ";
            	  	echo $row['timeout'];
            	  	echo "</p>"; 
            	  	
           	}
            ?>
</div>
</div>




    </div>
    <div class="col-4">
<div style="text-align:center;padding:20px 80px;text-align: justify;  color: white; 
 margin-top: 1px;
  margin-bottom: 0px;
  margin-right: -100px;
  margin-left: -70px;
  border-radius: 50px 20px;
   border-style: solid;
  border-color: #C34A2C;
  background-color: #FFFFFF;
">
  <h4 style="text-align:center; color: #C34A2C;" >Last On site Reservices</h4>
  <div style="text-align:center;padding:0px 50px;text-align: justify; background-color: #C34A2C; color: white;">
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
 $sql = "SELECT * FROM `timeintimeout` WHERE `sr_code` ='$sr' ORDER by id DESC LIMIT 1";
            $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 echo "<p style='text-align:center;'>".$row['service'];
                
                 echo "</p>"; 
                  
            }
            ?>

</div>
</div>
</div>
  </div>
</div>



<!-- modal para sa digital services -->


<div class="modal fade" id="digital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DIGITAL SERVICES</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#bookrequest">&nbsp;&nbsp;BOOK REQUEST&nbsp;</button>
        <hr>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#article">ARTICLE REQUEST</button>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<!-- para sa book request -->
<div class="modal fade" id="bookrequest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BOOK REQUEST</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="bookrequest.php" method="post"
       >
          <div class="mb-3">
            <input type="hidden" class="form-control" name="sr_code" value="<?php echo $_SESSION['username']?>">
            <input type="hidden" class="form-control" name="fullname" value="<?php echo $_SESSION['firstname'];
echo $_SESSION['lastname']?>">
            <label for="exampleInputEmail1" class="form-label">Authors/Editors</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="author">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="title">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="publisher">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Place of Publication</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="place">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date of Publication</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="dateof">
          </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >International Standard Book Num</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="inter">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Page Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Example 1-20" name="page">
          </div>
        

           <center><button type="submit" class="btn btn-danger">Submit</button></center>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>



<!-- modal para sa article -->

<div class="modal fade" id="article" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ARTICLE REQUEST</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="authorrequest.php" method="post">
          <div class="mb-3">
            <input type="hidden" class="form-control" name="sr_code" value="<?php echo $_SESSION['username']?>">
            <input type="hidden" class="form-control" name="fullname" value="<?php echo $_SESSION['firstname'];
echo $_SESSION['lastname']?>">
            <label for="exampleInputEmail1" class="form-label">Article Author</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="author">
          </div>
           <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Article Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="title">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Journal Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="journal">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Volume</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="volume">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="number">
          </div>
           <center><button type="submit" class="btn btn-danger">Submit</button></center>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>




<!-- para sa announcement -->
<div class="modal fade" id="anoun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Announcement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
      echo"<div style='text-align:center;padding:20px 110px;text-align: justify;  color: white; 
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>




<!-- modal para sa notification -->
<div class="modal fade" id="notification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Message</th>
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
              $sr = $_SESSION['username'];
              // echo $sr;
              $sql1 = "SELECT * FROM `notification` WHERE `sr_code` = '$sr' order by`datee` desc;";
               $result = mysqli_query($link, $sql1);
             while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['datee']."</td>";
                echo "<td >".$row['message']."</td>"; 
                echo "</tr>";
            }
            ?>
          </tbody>
        </table>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>



 modal para sa certi

<div class="modal fade" id="certi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Certification Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="certification.php" method="post">
      <div class="mb-3">
         <input type="hidden" class="form-control"  required name="sr_code" value="<?php echo $_SESSION['username']?>">

         <input type="hidden" class="form-control"  required name="fullname" value="<?php echo $_SESSION['firstname'];
         echo " ";
         echo $_SESSION['lastname']?>">
        <label for="exampleInputEmail1" class="form-label"><b>Thesis Title (Please use UPPER CASE LETTERS)</b></label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="thesis">
      </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><b>Author/s Information First Name, Middle Initial, Last Name, Name Suffix. Separate names with comma. (Please use UPPER CASE LETTERS) eg. JUAN C. DELA CRUZ, JR., APOLINARIO R. APACIBLE. Please ensure accurateness of the spelling of the name/s as this will be placed in your certificate.</b></label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="authors">
      </div>
       <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><b>College</b></label>
          </div>
          <select class="form-select mb-3"
                  name="college" 
                  aria-label="Default select example" required>
              <option selected value="College of Accountacy, Business, Economics and International Hospitality Management">College of Accountacy, Business, Economics and International Hospitality Management</option>
              <option value="College of Arts and Sciences">College of Arts and Sciences </option>
              <option value="College of Engineering and Computing Sciences">College of Engineering and Computing Sciences </option>
              <option value="College of Engineering">College of Engineering </option>
              <option value="College of Informatics and Computing Sciences">College of Informatics and Computing Sciences </option>
              <option value="College of Industrial Technology">College of Industrial Technology </option>
              <option value="College of Nursing and Allied Health Sciences">College of Nursing and Allied Health Sciences </option>
              <option value="College of Teacher Education">College of Teacher Education </option>
          </select>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><b>Degree Information</b></label>
          </div>
           <select class="form-select mb-3"
                  name="degree" 
                  aria-label="Default select example" required>
              <option selected value="Bachelor of Arts in Communication">Bachelor of Arts in Communication</option>
              <option value="Bachelor of Arts in Communication">Bachelor of Arts in Communication</option>
              <option value="Bachelor of Elementary Education">Bachelor of Elementary Education</option>
              <option value="Bachelor of Industrial Technology- Electrical Technology">Bachelor of Industrial Technology- Electrical Technology</option>
              <option value="Bachelor of Secondary Education - English">Bachelor of Secondary Education - English</option>
              <option value="Bachelor of Secondary Education - Mathematics">Bachelor of Secondary Education - Mathematics</option>
              <option value="Bachelor of Secondary Education - Sciences">Bachelor of Secondary Education - Sciences</option>
              <option value="BS Accountancy">BS Accountancy</option>
              <option value="BS Business Administration - Human Resource Management">BS Business Administration - Human Resource Management</option>
              <option value="BS Business Administration - Marketing Management">BS Business Administration - Marketing Management</option>
              <option value="BS Computer Engineering">BS Computer Engineering</option>
              <option value="BS Computer Science">BS Computer Science</option>
              <option value="BS Criminology">BS Criminology</option>
              <option value="BS Fisheries and Aquatic Sciences">BS Fisheries and Aquatic Sciences</option>
              <option value="BS Food Technology">BS Food Technology</option>
              <option value="BS Hospitality Management">BS Hospitality Management</option>
              <option value="BS Information Technology">BS Information Technology</option>
              <option value="BS Nursing">BS Nursing</option>
              <option value="BS Nutrition and Dietics">BS Nutrition and Dietics</option>
              <option value="BS Psychology">BS Psychology</option>
              <option value="BS Tourism Management">BS Tourism Management</option>
          </select>
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><b>Year of Submission of Thesis</b></label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="submission" required>
      </div>
 <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      
      
     
     
     
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sr-code</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
           
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
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
