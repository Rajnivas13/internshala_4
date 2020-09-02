<?php
   session_start();
   if(!isset($_SESSION['email']))
   {
    header ("location:../html/login_page.php");
   }
   session_destroy();
   header ("location:../includes/index.php");
?>
