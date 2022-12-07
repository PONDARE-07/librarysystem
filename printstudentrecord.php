<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Print student record</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f56614953f.js" crossorigin="anonymous"></script>

     <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />


     <script type="text/javascript">
	<!--
	
	//-->
	function myFunction() {
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
<body  onload="print()">
	<div style="text-align:center;padding:20px 80px;text-align: justify; background-color: #C34A2C; color: white;">
 <Center><img src="banner_library.png" style="width:150px;"></Center>
</div>
<br>
<center><input type="button" name="" value="&nbsp; Print &nbsp;" class="btn btn-primary noprint" onclick="myFunction()"  />
<input type="button" name="" value="&nbsp; Back &nbsp;&nbsp;" class="btn btn-success noprint" onclick="window.location.replace('adminrecordstudent.php')"/></center>
<div class = "col-lg-12 well" style = "margin-top:10px;">
                <div id = "book_table">
                   
                      <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead class = "alert-success">
                                <tr>
                                    <th>SR-CODE</th>
                                    <th>FIRSTNAME</th>
                                    <th>LASTNAME</th>
                                    <th>DEPARTMENT</th>
                                    <th>PROGRAM</th>
                                    <th>SECTION</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $con = mysqli_connect('localhost','root','','librarydb');
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
                                    GROUP BY si.sr_code";

                                $result = mysqli_query($con, $query);

                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>".$row["sr_code"]."</td>";
                                    $sr_cord = $row['sr_code'];
                                    echo "<td>".$row["firstname"]."</td>";
                                    echo "<td>".$row["lastname"]."</td>";
                                    echo "<td>".$row["department_name"]."</td>";
                                    echo "<td>".$row["program_name"]."</td>";
                                    echo "<td>".$row["section"]."</td>";
                                   
                                    echo "</tr>";
                                }
                            ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>