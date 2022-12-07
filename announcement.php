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

$sub = $_POST['subject'];
$com = $_POST['comment'];
$user = $_POST['username'];
$date = date("Y/m/d");

$sql = "insert into announcement(subject,message,username,date) VALUES ('$sub','$com','$user','$date')";

if(mysqli_query($link,$sql)){
      echo '<script>
                              alert("You successfully create a Announcement");
                              window.location.href="admindashboard.php";
                              </script>';
   }
   else{
    echo "may mali sa query";
   }
?>