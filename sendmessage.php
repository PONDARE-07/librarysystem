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
$full = $_POST['fname'];
$message = $_POST['message'];
$dat  = date("Y/m/d");
$sql ="insert into notification( `sr_code`, `fullname`, `message`,`datee`) VALUES ('$sr','$full','$message','$dat')";

if(mysqli_query($link,$sql)){
      echo '<script>
                              alert("You have successfully sent this message!");
                              window.location.href="admindashboard.php";
                              </script>';
   }
   else{
    echo "may mali sa query";
   }


?>
