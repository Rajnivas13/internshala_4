<?php
  require "../includes/common.php";

 $name = $_POST['name'];
 $name = mysqli_real_escape_string($con , $name);

 $email = $_POST['email'];
 $email = mysqli_real_escape_string($con , $email);

 $password = $_POST['password'];
 $password = mysqli_real_escape_string($con , $password);
 $password = md5($password);

 $contact = $_POST['contact'];
 $contact = mysqli_real_escape_string($con , $contact);

 $city = $_POST['city'];
 $city = mysqli_real_escape_string($con , $city);

 $address = $_POST['address'];
 $address = mysqli_real_escape_string($con , $address);
 
 $regex_email="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?";
 $regex_contact="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$";

 $select_query  = " SELECT * FROM users WHERE email = '$email' ";
 $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$num_rows_fetched=mysqli_num_rows( $select_query_result);
if($num_rows_fetched != 0){
       $m=echo"<span class='red'>the user is in already in our lists</span>";
       header('location:signup.php?m1='.$m);
}
elseif(!preg_match($regex_email,$email)){
  $m=echo"<span class='red'>invalid email</span>";
  header('location:signup.php?m2='. $m);
}
elseif(!preg_match($regex_contact,$contact)){
  $m=echo"<span class='red'>invalid contact</span>";
  header('location:signup.php?m3='. $m);
}
else{
    $insert_query="INSERT INTO users (name,email,password,contact,city,address) VALUES('$name','$email','$password','$contact','$city','$address') ";
    $insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
    $user_id=mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$user_id;
    if(isset($_SESSION['user_id'])){
    header('location:products.php');
    exit;
    }
  }
?>