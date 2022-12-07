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







 $id = $_POST['id'];
  echo "<pre>";
  print_r($_FILES['my_image']);
  echo "</pre>";
  $img_name = $_FILES['my_image']['name'];
  $img_size = $_FILES['my_image']['size'];
  $tmp_name = $_FILES['my_image']['tmp_name'];
  $error = $_FILES['my_image']['error'];

 
  echo $id;
  if ($error === 0) {
    if ($img_size > 10000000000) {
      $em = "Sorry, your file is too large.";
        echo $em;
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("pdf","csv","docx"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = 'uploadcertificate/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);



        // Insert into Database
        $sql = "update certificationrequest set image_url='$new_img_name' where id = '$id'";
        mysqli_query($link, $sql);
        header("Location:admindashboard.php");
      }else {
        $em = "You can't upload files of this type";
            echo $em;
      }
    }
  }else {
    $em = "unknown error occurred!";
    echo $em;
  }




?>