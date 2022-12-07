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
$auth = $_POST['author'];
$fname = $_POST['fullname'];
$titl =$_POST['title'];
$pub = $_POST['publisher'];
$place =$_POST['place'];
$dateofpub =$_POST['dateof'];
$isbn =$_POST['inter'];
$Page =$_POST['page'];
$date1 = date("Y/m/d");
$sql ="insert into bookrequest(sr_code,fullname,author,title,publisher,place,date,isbn,page,reqdate) VALUES ('$sr','$fname','$auth','$titl','$pub','$place','$dateofpub','$isbn','$Page','$date1')";

if(mysqli_query($link,$sql)){
      echo '<script>
                              alert("You have successfully submitted your article request!");
                              window.location.href="studentonline.php";
                              </script>';
   }
   else{
    echo "may mali sa query";
   }

?>