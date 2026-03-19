<?php
$errorusername  = null;

if(isset($_POST['submit'])){
if(empty($_POST['username'])){
    $errorusername = "Please enter username";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student Registration Form </h2>

     <form method="post" action="">


     <input type="text" name="username" placeholder="Enter username" />
     <?php echo $errorusername;?>
          <input type="text" name="address" placeholder="Enter address" />
             <input type="submit" name="submit"  />

     </form>
</body>
</html>

