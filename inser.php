<?php
$con = mysqli_connect('localhost','root','','librarydb');
$row = 1;
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$busno = $_POST['submit_file'];

echo $busno;

if($busno=="Submit"){
    echo "walang laman";
}
?>