<?php
       require "../includes/common.php";
       if(!isset($_SESSION['email'])){
         header("location:signup.php");
       }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cart page</title>
    <meta name="description" content="cart page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="../css/internshala.css">
    <link rel="stylesheet" href="internshala.css">
</head>
<body>
<div class="container" style="background: none"> 
<div class="table-responsive"> 
        <table class="table-bordered table-hover table_margin" height="100px" width="900px">
        <tr>
          <th>Item no</th>
          <th>Item name</th>
          <th>Price</th>
          <th>&nbsp </th>
        </tr> 
        <?php 
    include "../includes/header.php";
    $user_id = $_SESSION['user_id'];
    $sum=0;
    $query="SELECT items.id,items.name,items.price AS price FROM items INNER JOIN users_items ON items.id=users_items.item_id WHERE users_items.user_id='$user_id' and status='Added To Cart'  ";
    $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
    $num_rows=mysqli_num_rows($query_result);
    if($num_rows==0){
         echo"add the item to the cart";
    }
    else{
         while($row=mysqli_fetch_array($query_result))
         {
           $sum+=$row['price'];
           $id=$row['id'];
          echo"<tr><td>"."#".$row['id']."</td><td>".$row['name']."</td><td>".$row['price']."</td><td> <a href='cart_remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr></a>";
         }
         echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?id={$row['id']} ' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
        }

        ?>
      </table>
      </div>
     </div> 
   

   
      <?php
           include "../includes/footer.php";
      ?>
</body>
</html>