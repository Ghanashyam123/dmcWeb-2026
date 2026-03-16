<?php

$conn = mysqli_connect("localhost","root","root","collegeDMC");

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT image FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

unlink("images/".$row['image']);

mysqli_query($conn,"DELETE FROM students WHERE id=$id");

header("Location:index.php");

?>