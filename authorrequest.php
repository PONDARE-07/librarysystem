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
$fname = $_POST['fullname'];

$auth = $_POST['author'];
$titl =$_POST['title'];
$jour =$_POST['journal'];
$vol =$_POST['volume'];
$num =$_POST['number'];
$date1 = date("Y/m/d");

$sql = "insert into articlerequest(sr_code,fullname,author,title,journal,volumn,number,date) VALUES (
'$sr','$fname','$auth','$titl','$jour','$vol','$num','$date1'
)";

if(mysqli_query($link,$sql)){
      echo '<script>
                              alert("You have successfully submitted your article request! ");
                              window.location.href="studentonline.php";
                              </script>';
   }
   else{
    echo "may mali sa query";
   }

?>