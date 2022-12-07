<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script type="text/javascript">
	<!--
	
	//-->
	function myFunction1() {
   window.print();
}
	</script>
    <style type="text/css" media="print">
    	 
    	@media print{
    		.noprint, .noprint *{
    			display: none; !important;
    		}
    	}

    </style>
</head>
<body onload="print()">
<br>
  <center><input type="button" name="" value="&nbsp; Print &nbsp;" class="btn btn-primary noprint" onclick="myFunction1()"  />
<input type="button" name="" value="&nbsp; Back &nbsp;&nbsp;" class="btn btn-success noprint" onclick="window.location.replace('admindashboard.php')"/></center>

<div class="container">
  <div class="row">
    <div class="col">
      <center>Refernce No.: BatStateU-CE-11</center>
    </div>
    <div class="col">
  <center>    
Effectivity Date: <?php $date = date("M d,Y"); echo $date;?></center>
    </div>
    <div class="col">
     <center>Revision No.: 02</center>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col">
      <img src="batlogo.png" width="150px">

    </div>
    <div class="col-6">
      <p style="text-align: center;  font-weight: bold;">Republic of the Philippines</p>
      <p style="text-align: center;font-size: 22px; margin-top: -21px;  font-weight: bold;word-break: break-all;">BATANGAS STATE UNIVERSITY</p>
      <p style="text-align: center;font-size: 15px;color: red; margin-top: -21px;  font-weight: bold;">The National Engineering University</p>
      <p style="text-align:center ;font-weight: bold;margin-top: -15px;" >ARASOF-Nasugbu Campus</p>
      <p style="text-align:center ;font-size: 10px;margin-top: -15px;font-weight: bold;   word-break: break-all;
    white-space: normal;">R. Martinez St, Brgy. Bucana, Nasugbu, Batangas, Philippines 4231</p>
    <p style="text-align:center;font-size: 10px;margin-top: -15px;">Tel Nos.: (+6343) 416 0350 local 214<p>
    </div>
    <div class="col">
     
    </div>
  </div>
  <p style="text-align: center; font-size:10px ;margin-top: -15px;">E-mail Address: library.nasugbu@g.batstate-u.edu.ph | Website Address: http://www.batstate-u.edu.ph</p>
</div>
<hr style="border: 2px solid black;">
<br>
<p style="text-align:center; font-family:times new roman; margin-top: -10px;">CERTIFICATION FOR THESIS/DISSERTATION SUBMISSION</p>
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


$sr = $_POST['sr'];
// $sd = $_POST['code'];
$da  = date('d');
$mon = date('M');
$year = date('Y');
$monyear = $mon." ".$year;


echo $sr;


$sql = "SELECT * FROM `certificationrequest` WHERE id = '$sr'";
 			 $result = mysqli_query($link, $sql);
             while ($row = mysqli_fetch_array($result)) {
             	echo"<p style=' margin: 50px;  text-align: justify; text-indent: 50px;margin-top: -10px;'>";
             	echo "This is to certify <b>".$row['author']."</b> of the ".$row['college']." has submitted electronic and hardbound copies of 
their thesis entitled <b> 	
&#8220;".$row['title']."&#8221;</b> ";
             	echo"</p>";

             	echo"<p style=' margin: 50px;  text-align: justify; text-indent: 50px;'>Issued this ".$da." day of ".$monyear." in Batangas State University ARASOF-Nasugbu 
Library. ";
             	echo"</p>";
             	echo "<p style=' margin: 30px;  text-align: justify;'>Prepared and verified by:</p>";

             	echo"<p style=' margin: 30px;'>_________________________________</P>";
             	
             	echo "<p style=' margin: 30px; margin-top: -30px;'><b>RAHADEL V. DESTREZA, RL</b></p>";
             	echo "<p style=' margin: 30px; margin-top: -31px;'>School Librarian II, Library Services</p>";
             	echo"<br>";
             	echo"<p style=' margin: 30px; margin-top: -31px;'>Approved and reviewed by:</p>";
             	echo"<p style=' margin: 30px;'>_________________________________</P>";
             		echo "<p style=' margin: 30px; margin-top: -30px;'><b>ELLAINE G. LID-AYAN, RL, MLIS</b></p>";
             	echo "<p style=' margin: 30px; margin-top: -31px;'>Head, Library Services</p>";
             	echo"<p style=' margin: 30px;'>_________________________________</P>";
             		echo "<p style=' margin: 30px; margin-top: -30px;'><b>JAKE MORGAN C. DERAIN</b></p>";
             			echo"<p style=' margin: 30px;'>_________________________________</P>";
             		echo "<p style=' margin: 30px; margin-top: -30px;'><b>MARIJOY V. LAGRAN</b></p>";
             			echo"<p style=' margin: 30px;'>_________________________________</P>";
             		echo "<p style=' margin: 30px; margin-top: -30px;'><b>HAINA D. MINAGA</b></p>";
             			echo"<p style=' margin: 30px;'>_________________________________</P>";
             		echo "<p style=' margin: 30px; margin-top: -30px;'><b>JAKE MORGAN C. DERAIN</b></p>";
             		echo"<p style=' margin: 30px;'>_________________________________</P>";
             		echo "<p style=' margin: 30px; margin-top: -30px;'><b>YDRANN LOUIE S. SEVILLA</b></p>";
             	echo"<p style=' margin: 30px; margin-top: -30px;'>Researcher/s</p>";



             	
             	
             }




?>

</body>
</html>
