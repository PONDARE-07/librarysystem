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
$del = $_GET['cancelid'];


$sql1 = "delete from visitors where id = '$del'";

echo $del;
 $result = mysqli_query($link,$sql1);

                            if($result){
                               echo '<script>
                                                          alert("You Successfully Remove this records");
                                                          window.location.href="visitorsrecord.php";
                                                          </script>';
                            }
                            else{
                              die(mysqli_error($link));
                            }  

// echo $del;


?>