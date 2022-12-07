<?php  
session_start();
include "dbcon.php";

// if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}


	$username = $_POST['username1'];
	$password = $_POST['password1'];
	$role = $_POST['role'];



	if (empty($username)) {
		  echo '<script>
      alert("Please Enter Your Username");
      window.location.href="index.php";
      </script>';
	}else if (empty($password)) {
		  echo '<script>
      alert("Please Enter Your Password");
      window.location.href="index.php";
      </script>';
	}

	else {

	// 	// Hashing the password
	// 	$password = md5($password);
        
        $sql = "SELECT * FROM librarian WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);

        	if ($row['password'] == $password && $row['role'] == $role) {
        		// $_SESSION['name'] = $row['name'];
        		// $_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];

        		// header("Location:admindashboard.php");
        		  echo '<script>
				      alert("Welcome Admin");
				      window.location.href="admindashboard.php";
				      </script>';

        	}else {
        		  echo '<script>
                              alert("Invalid Username or password");
                              window.location.href="index.php";
                              </script>';
        	}
        }else {
        	    echo '<script>
                              alert("Invalid Username or password");
                              window.location.href="index.php";
                              </script>';
        }

	}
?>
// }else {
// 	header("Location:index.php");
// }