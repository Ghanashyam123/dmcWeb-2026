<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location:dashboard.php");
}else{
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
$con = mysqli_connect("localhost","root","root","collegeDMC");
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
if(mysqli_query($con,$sql)){
    $_SESSION['username'] = $username;
    header("Location:dashboard.php");
}

mysqli_close($con);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="">
       <fieldset>
        <legend>Login </legend>
         <input type="text" name="username" name="username" placeholder="Enter username"/>
                  <input type="password" name="password" name="username" placeholder="enter password"/>
                           <input type="submit" name="login" value="Login"/>


       </fieldset>

    </form>
</body>
</html>
<?php } ?>