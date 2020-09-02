<?php
     require"../includes/common.php";
      if(!isset($_session['email'])){
        header("location:index.php");
      }
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>settings page</title>
    <meta name="description" content="settings page">
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
    <nav class="navbar navbar-inverse navbar-fixedtop">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">lifestyle store</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../html/cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li>
            <li><a href="../html/settings.php"><span class="glyphicon glyphicon-cog"></span> settings</a></li>
            <li><a href="../html/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid border">
        <form class="form" action="settings_script.php" method="POST">
        <div class="form-horizontal form">
        <div class="form-group">
           <h3>change password</h3>
            <label for="password" class="sr-only"></label>
            <input type="password" id="password" class="form-control" placeholder="old password" name="password" required="true">
            </div>

            <div class="form-group">  
            <label for="new password" class="sr-only"></label>
            <input type="password" id="new password" class="form-control" placeholder="new password" name="newpassword" required="true">
           </div>
      
            <div class="form-group">
            <label for="retype password" class="sr-only"></label>
            <input type="password" id="retype password" class="form-control" placeholder="retype password" name="retypepassword"required="true">
           </div>
           <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
            ?>
           <a id="button" type="button" class="btn btn-primary" href="products.html">change</a>
         </div>
         </div>
         <footer>
            <div class="container footertop">
              <center>
               <p> Copyright © Lifestyle Store. All Rights
                 Reserved  Contact Us: +91 90000 00000</p>
              </center>
           </footer>
           </div>
</body>
</html>