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
$fullname = $_POST['full_name'];
$date = date("Y/m/d");
 date_default_timezone_set('Asia/Manila');
$timein= date("H:i");

$depart;
$prog;
if(!empty($_POST['box'])){
$boxes = $_POST['box'];
$values = implode(" / ",$boxes);
	

 $query = "SELECT si.sr_code, 
                                    si.firstname,
                                    si.lastname, 
                                    d.department_name, 
                                    p.program_name,
                                    si.section    
                                    FROM `student_info` AS si LEFT JOIN program p 
                                    ON p.id = si.program_code 
                                    LEFT JOIN department d 
                                    ON d.department_id = si.department_id
                                    where si.sr_code = '$code'
                                    GROUP BY si.sr_code";

$result = mysqli_query($link, $query);
while($row = mysqli_fetch_assoc($result)){

$depart = $row["department_name"];
$prog = $row["program_name"];
$section = $row["section"];
}



//
// 

 $sql4 = "insert into timeintimeout(sr_code,name,department,course,service,datetoday,timein,section) values('$code','$fullname','$depart','$prog','$values','$date','$timein','$section')";
   if(mysqli_query($link,$sql4)){
   	  echo '<script>
                              alert("'.$values.'");
                              window.location.href="logout.php";
                              </script>';
   }
   else{
   	echo "may mali sa query";
   }
}
else{
	 echo '<script>
              alert("Please Select 1 or more Services before clicking the button");
              window.location.href="welcomestudent.php";
              </script>';
}


?>