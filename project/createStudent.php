<?php 
  if(isset($_POST['submit'])){
    $stname = $_POST['stname'];
    $address = $_POST['address'];

    $img = $_FILES['image']['name'];
    $filePath = $_FILES['image']['tmp_name'];

    move_uploaded_file($filePath,"images/".$img);
$con = mysqli_connect("localhost","root","root","collegeDMC");
$sql = "INSERT INTO students(stname,address,image) VALUES('$stname','$address','$img')";
if(mysqli_query($con,$sql)){
    $_SESSION['username'] = $username;
    header("Location:dashboard.php");
}


  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student register</title>
</head>
<body>
        <h2>Student registration Form </h2>
        <form method="post" action="" enctype="multipart/form-data">
             <fieldset>
                <legend>Student's form</legend>
                <label>Student Name </label>
                <input type="text" name="stname"/><br><br>
                <label>Address </label>
                <input type="text" name="address"/><br><br>
                <label>Image </label>
                <input type="file" name="image"/><br><br>
                <input type="submit" name="submit" value="create"> 
            </fieldset>
        </form>
</body>
</html>