<?php

$conn = mysqli_connect("localhost","root","root","collegeDMC");

$id = $_POST['id'];
$stname = $_POST['stname'];
$address = $_POST['address'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"images/".$image);

$sql = "UPDATE students SET 
stname='$stname',
address='$address',
image='$image'
WHERE id=$id";

mysqli_query($conn,$sql);

header("Location:dashboard.php");

?>