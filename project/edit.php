<?php
$conn = mysqli_connect("localhost","root","root","collegeDMC");

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <title>Edit Data</title>

    </head>
    <body>
<form action="update.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Student Name:
<input type="text" name="stname" value="<?php echo $row['stname']; ?>"><br><br>

Address:
<input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>

Current Image:<br>
<img src="images/<?php echo $row['image']; ?>" width="100"><br><br>

Change Image:
<input type="file" name="image"><br><br>

<button type="submit">Update</button>

</form>
    </body>
</html>
