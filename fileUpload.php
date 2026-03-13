<?php 
if(isset($_POST['upload'])){
  
  // image (jpg)
  //size 2mb

    $filename = $_FILES['image']['name'];

    $filePath = $_FILES['image']['tmp_name'];



    // echo $filename;
    // echo "<br>";
    // echo $filePath;
    // die;

    if(move_uploaded_file($filePath,"images/".$filename)){
        echo "<h2>File uploaded </h2>";
    }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <label>Upload file </label>
        <input type="file" name="image" />
        <input type="submit" name="upload" value="upload"/>
    </form>
</body>
</html>