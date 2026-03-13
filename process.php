<?php 
if(isset($_POST['submit'])){
  
$username =  htmlspecialchars($_POST['username']);
  
if(empty($username)){
    echo "Please Enter username";
}

}


?>