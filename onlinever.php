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

$code = $_POST['sr_code'];
$pass = $_POST['password'];

$sql1 = "SELECT * FROM student_info WHERE sr_code ='$code' AND password='$pass'";

$result = mysqli_query($link, $sql1);
if (mysqli_num_rows($result) === 1) {
          
          $row = mysqli_fetch_assoc($result);

          if ($row['sr_code']==$code) {
                      $_SESSION['username'] = $row['sr_code'];
                      $_SESSION['firstname'] = $row['firstname'];
                      $_SESSION['lastname'] = $row['lastname'];
                     
                        echo '<script>
                          alert("Welcome to Online Version of Library");
                          window.location.href="studentonline.php";
                          </script>';
                               
            }
           
            // header("Location:index.php");

          }else {
                                   echo '<script>
                          alert("Please enter the correct password");
                          window.location.href="welcomestudent.php";
                          </script>';
          }
       


?>
