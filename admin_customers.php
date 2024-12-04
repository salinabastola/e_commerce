<?php

require_once 'config.php';
$query = "select * from users";
$result = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>custumers</title>
   <link rel="stylesheet" href="admin_style.css">
   
<?php include 'admin_header.php'; ?>

</head>
<body>

   
         <table>
         <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
         </tr>
         <?php
         while($row = mysqli_fetch_assoc($result))
         {
         ?>

<tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
</tr>
         <?php
         }
         ?>
      </table>
 
     
   
   </div>

</section>