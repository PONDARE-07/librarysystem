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
date_default_timezone_set('Asia/Manila');
$timein= date("H:i");


$sql = "SELECT * FROM student_info WHERE sr_code ='$code' AND password='$pass'";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) === 1) {
          // the user name must be unique
          $row = mysqli_fetch_assoc($result);

          if ($row['sr_code']==$code) {
            
           $sql1 = "update timeintimeout SET timeout = '$timein' where sr_code ='$code'";
            if (mysqli_query($link, $sql1)) {
                       $result = mysqli_query($link,$sql1);
                  if($result){
                        echo '<script>
                          alert("You Successfully Time out this Account");
                          window.location.href="index.php";
                          </script>';
                  }                 
            }
            else{
            echo "something wrong" ;
            }

            // header("Location:index.php");

          }else {
                                   echo '<script>
                          alert("Please enter correct Sr_code and password");
                          window.location.href="index.php";
                          </script>';
          }
        }else {
                                 echo '<script>
                          alert("Please enter correct Sr_code and password");
                          window.location.href="index.php";
                          </script>';
        }



// $sql = "update timeintimeout set timeout = $timein where sr_code = $deleteid";
// $sql1 = "update timeintimeout SET timeout = '$timein' where sr_code ='$deleteid'";



// if (mysqli_query($link, $sql1)) {
//            $result = mysqli_query($link,$sql1);
//       if($result){
//             echo '<script>
//               alert("You Successfully Time out this Account");
//               window.location.href="index.php";
//               </script>';
//       }                 
// }
// else{
// echo "something wrong" ;
// }

?>