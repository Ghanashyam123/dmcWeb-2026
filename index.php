<?php
 // connection
// method 1 mysqli
//   $conn = mysqli_connect("localhost","root","root","onlinebook");
//   if(!$conn){
//     die("Error database connection....");
//   }

// method 2 pdo
// $user ="root";
// $pass ="root";
// $dsn = "mysql:host=localhost;dbname=onlinebook";
// $pdo = new PDO($dsn, $user, $pass);
// $pdo->setAttribute(PDO::ATTR_ERRMODE,
//   PDO::ERRMODE_EXCEPTION);

// file handling 
 $a = fopen("data.txt","r");

   if($a){
    while(!feof($a)){
      $line = fgets($a);
      echo $line . "<br>";
    }

   }
   fclose($a);



 ?>
