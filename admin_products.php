<?php

require_once 'config.php';
$query = "select * from product";
$result = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>
   <link rel="stylesheet" href="admin_style.css">
   
<?php include 'admin_header.php'; ?>

</head>
<body>

<div class="details">
   <div class="recentOrders">
                    
         <table>
         <tr class="table">
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>price</th>
            <th>image</th>
            <th>feature</th>
            <th>action</th>
         </tr>
         <?php
         while($row = mysqli_fetch_assoc($result))
         {
         ?>

<tr>
            <td><?php echo $row['product_id'];?></td>
            <td><?php echo $row['title'];?></td>
            <td><?php echo $row['description'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['image'];?></td>
            <td><?php echo $row['featured'];?></td>

</tr>
         <?php
         }
         ?>
      </table>
 
     
   
   </div>
      

