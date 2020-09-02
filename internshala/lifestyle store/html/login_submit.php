<?php
  require "../includes/common.php";
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con , $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con , $password);
  $password = MD5($password);

  // $regex_email="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?";
  // $regex_contact="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$";

 $select_query="SELECT id,email,password FROM users WHERE email='$email' AND password='$password'";
 $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$num_rows_fetched=mysqli_num_rows( $select_query_result);
// if(!preg_match($regex_email!= $email)){
//     $m1="<span class='red'>incorrect email</span>";
//     header('location:login_page.php?m1='.$m1);
// }
if($num_rows_fetched!= 0){
  $row = mysqli_fetch_array($select_query_result);
  $_SESSION['email'] = $email;
  $_SESSION['user_id']=$row['id'];
  header("location:products.php");
}
else{
  header('location:signup.php');
}
?>
