<?php 
   session_start();
   include "dbcon.php";
   if (isset($_SESSION['username'])&& isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Online History</title>
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
            <li><a class="dropdown-item" href="#">CERTIFICATION</a></li>
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
 <div style="text-align:center;padding:20px 110px;text-align: justify;  color: white; 
       margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 20px;
        margin-left: 20px;
        border-radius: 50px 50px;
         border-style: solid;
        border-color: darkred;
        background-color: white;"
      >
       <h3 style="text-align:center; color: #C34A2C;" >BOOK REQUEST</h3>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Book Request</th>
      <th scope="col">Action</th>
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
            $sql = "select * from bookrequest where sr_code='$sr'";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
                echo "<td>";
                echo
                "
                <p>
                AUTHOR :".$row['author']." 
                / TITLE :".$row['title']."
        / PUBLISHER :".$row['publisher']."
        / PAGE :".$row['page']."
        / REQUESTDATE :".$row['reqdate']."


                </p>
                ";
                echo"</td>";
                echo"<td><a class='btn btn-primary' href='uploadbookrequest//".$row['image_url']."'>OPEN</a>";

                echo"</td>";
                echo "</tr>";
            
             }
            ?>
  </tbody>
</table>
      </div>



 <div style="text-align:center;padding:20px 110px;text-align: justify;  color: white; 
       margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 20px;
        margin-left: 20px;
        border-radius: 50px 50px;
         border-style: solid;
        border-color: violet;
        background-color: white;"

      >
       <h3 style="text-align:center; color: #C34A2C;" >ARTICLE REQUEST</h3>
       <table class="table">
  <thead>
    <tr>
      <th scope="col">Article Request</th>
      <th scope="col">Action</th>
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
            $sql = "select * from articlerequest where sr_code='$sr'";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($result)) {
 				echo "<tr>";
                echo "<td>";
                echo
                "
                <p>
                AUTHOR :".$row['author']." 
                / TITLE :".$row['title']."
				/ JOURNAL :".$row['journal']."
				/ VOLUMN :".$row['volumn']."
				/ NUMBER :".$row['number']."


                </p>
                ";
                echo"</td>";
                echo"<td><a class='btn btn-primary' href='uploadarticle//".$row['image_url']."'>OPEN</a>";

                echo"</td>";
                echo "</tr>";
            
             }
            ?>
  </tbody>
</table>
      </div>

 <div style="text-align:center;padding:20px 110px;text-align: justify;  color: white; 
       margin-top: 10px;
        margin-bottom: 10px;
        margin-right:20px;
        margin-left: 20px;
        border-radius: 50px 50px;
         border-style: solid;
        border-color: orange;
        background-color: white;"
      >
       <h3 style="text-align:center; color: #C34A2C;" >CETIFICATION REQUEST</h3>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Certification Request</th>
      <th scope="col">Action</th>
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
            $sql = "select * from certificationrequest where sr_code='$sr'";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
                echo "<td>";
                echo
                "
                <p>
                TITLE :".$row['title']." 
                / AUTHOR :".$row['author']."
        / COLLEGE :".$row['college']."
        / DEGREE :".$row['degree']."
        / YEAR :".$row['year']."
        / DATE :".$row['datee']."


                </p>
                ";
                echo"</td>";
                echo"<td><a class='btn btn-primary' href='uploadcertificate//".$row['image_url']."'>OPEN</a>";

                echo"</td>";
                echo "</tr>";
            
             }
            ?>
  </tbody>
</table>
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
</body>
</html>
<?php }else{
  header("Location: index.php");
} ?>
