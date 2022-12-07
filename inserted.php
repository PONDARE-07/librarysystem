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
$file = $_FILES["file"]["tmp_name"];
if (($handle = fopen($file, "r")) !== FALSE) {
    fgetcsv($handle);
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
  $srcode = $data[0];
  $pass = $data[1];
  $firstname = $data[2];
  $lastname = $data[3];
  $department = $data[4];
  $program = $data[5];
  $section = $data[6];
  // 
  // '$srcode',`$pass`,'$firstname','$lastname','$department','$program','$section'
  $sql1 = "insert into student_info(sr_code,password,firstname,lastname,department,program,section) VALUES ('22-2201','22-2201','johnlimon','lainez','1','1','10222')";

if(mysqli_query($link,$sql1)){
                        echo '<script>
                              alert("");
                              window.location.href="adminrecordstudent.php";
                              </script>';
   }
   else{
    // echo "may mali sa query";
    echo $srcode;
    echo "<br>";
   }
}
fclose($handle);
  
}

?>