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
$code = $_POST['sr-code'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$depart = $_POST['department'];

$prog = $_POST['program1'];
$sec = $_POST['section'];
// 
$sql2 = "update student_info set firstname = '$fname', lastname = '$lname',department_id = $depart,program_code = $prog,section ='$sec'
where sr_code = '$code' ";

if (mysqli_query($link, $sql2)) {
           $result = mysqli_query($link,$sql2);
			if($result){
				  	echo '<script>
			        alert("You Successfully Updated this Record");
			        window.location.href="adminrecordstudent.php";
			        </script>';
			}                 
}
else{
echo "something wrong" ;
}

?>