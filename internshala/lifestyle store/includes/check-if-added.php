<?php
function check_if_added_to_cart($item_id){ 
    require '../includes/common.php';
    $user_id = $_SESSION['user_id'];
   
    $select_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id'AND
status='Added to cart'";
     $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
     $select_num_rows=mysqli_num_rows($select_query_result);
     if($select_num_rows>=1){
        return 1;
     }else{
         return 0;
     }
    }
?>