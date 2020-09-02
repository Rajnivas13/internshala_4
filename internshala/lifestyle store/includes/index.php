<?php
    require "../includes/common.php";
    if(isset($_SESSION['email']))
    {
        header("location:products.php");
    }
?>
 <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>product page</title>
        <meta name="description" content="product page">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="../css/internshala.css">
        <link rel="stylesheet" type="text/css" href="internshala.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixedtop">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">lifestyle store</a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../html/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../html/login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
          </nav>
          <div id="banner_image">
            <div id="container">
              <div id="banner_content">
                <h3>lifestyle store</h3>
                <a type="button" class="btn btn-danger btn-lg active" href="../html/products.php">shop now</a>
              </div>
            </div>
          </div>
          <footer>
           <div class="container topspace">
             <center>
              <p> Copyright © Lifestyle Store. All Rights
                Reserved  Contact Us: +91 90000 00000</p>
             </center>
          </div></footer>
    
</body>
    
    
</html>


<!-- 


<body>
        <nav class="navbar navbar-inverse navbar-fixedtop">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">lifestyle store</a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login_page.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
          </nav>
          <div id="banner_image">
            <div id="container">
              <div id="banner_content">
                <h3>lifestyle store</h3>
                <a type="button" class="btn btn-danger btn-lg active" href="products.html">shop now</a>
              </div>
            </div>
          </div>
          <footer>
           <div class="container topspace">
             <center>
              <p> Copyright © Lifestyle Store. All Rights
                Reserved  Contact Us: +91 90000 00000</p>
             </center>
          </div></footer>
    
</body> -->