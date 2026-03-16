<?php 
session_start();
if(isset($_SESSION['username'])){
    $con = mysqli_connect("localhost","root","root","collegeDMC");
    $sql = "SELECT * FROM students";
    $res = mysqli_query($con,$sql);
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
     <h2>Admin Dashboard</h2>
      <a href="createStudent.php"><button > Add new Record  </button> </a>
      <table border="2">
        <tr>    
            <th>SN</th>
            <th>student's name </th>
            <th> address </th>
            <th>image</th>
            <th>Action </th>
        </tr>
        <?php 

        while($row=mysqli_fetch_assoc($res)){
            ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['stname'];?> </td>
            <td><?php echo $row['address'];?> </td>
            <td><img src="images/<?php echo $row['image'];?>" width="100" height="100" /></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>    
                <a href="delete.php?id=<?php echo $row['id']; ?>"><button>Delete</button></a>
            </td>
        </tr>

        <?php } ?>
      </table>
         
</body>
</html>

<?php }else{
    header("Location:index.php");
} ?>