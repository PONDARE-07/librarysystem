<?php
session_start();
include "dbcon.php";

$code = $_POST['code'];
$pass = $_POST['password'];





$sql = "SELECT * FROM student_info WHERE sr_code ='$code' AND password='$pass'";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);

        	if ($row['sr_code']==$code and $row['password']==$pass) {
        		
        		// $_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['sr_code'];
        		$_SESSION['firstname'] = $row['firstname'];
        		$_SESSION['lastname'] = $row['lastname'];

        		header("Location:timeout2.php");
        	}else {
        		echo '<script>
                              alert("Invalid Username or Password");
                              window.location.href="index.php";
                              </script>';
        	}
        }else {
        	 echo '<script>
                              alert("Invalid Username or Password");
                              window.location.href="index.php";
                              </script>';
        }
?>