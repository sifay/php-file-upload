<?php 

  if(isset($_POST['submit'])) {
      $img_name = $_FILES['upload']['name'];
      $tmp_name = $_FILES['upload']['tmp_name'];
      move_uploaded_file($tmp_name, "upload/".$img_name);
      //echo $tmp_name;

  }
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contig- Upload unlimited images for free</title>
</head>
<body>
     <form action="index.php" enctype="multipart/form-data" method="POST">
         <input type="file" value="uoload" name="upload">
         <br>
         <input type="submit" value="Submit" name="submit">
     </form>
     <img src="upload/<?php echo $img_name; ?>" alt="">
</body>
</html>