<?php
	include 'conFunc.php';
?>
<?php
	$visitors_fname = $_POST['visits'];
	$transaction = $_POST['transaction'];

$sql = "insert into visitors(visitors_fname,transaction,date_entered) 
		values('$visitors_fname','$transaction',NOW())";

if (mysqli_query($link, $sql)) {
  echo '<script> 
  alert("Succesfully registered")
  window.location.href="logout.php";
  </script>';

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>   
