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

$sr = $_POST['sr_code'];
$fname = $_POST['fullname'];
$thesis = $_POST['thesis'];
$author = $_POST['authors'];
$college = $_POST['college'];
$degree = $_POST['degree'];
$year = $_POST['submission'];
$da  = date("Y/m/d");

$new_value = str_replace("'","''", $thesis); 





$sql = "insert into certificationrequest(`sr_code`, `fname`, `title`, `author`, `college`, `degree`, `year`,`datee`) 
VALUES ('$sr','$fname','$new_value','$author','$college','$degree','$year','$da')";

if(mysqli_query($link,$sql)){
      echo '<script>
                              alert("You have successfully send this Request");
                              window.location.href="studentonline.php";
                              </script>';
   }
   else{
    echo "may mali sa query";
   }
   
?>