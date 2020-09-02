<?php
      require "../includes/common.php";
      if (isset($_SESSION['email'])) {
    header('location: products.php');
}
  ?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>loginpage</title>
        <meta name="description" content="loginpage">
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
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid margin">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h3>Login</h3>
                  </div>
                  <div class="panel-body">
                      <p class="text-danger">login to make a purchase</p><br>
                      <form class=form-group method="POST" action="login_submit.php">
                          <label for="email" name="email">email</label>
                          <input type="email" id="email" class="form-control" placeholder="email"  name="email" required="true" > <br>
                          <label for="password" name="password">password</label>
                          <input type="password" id="password" class="form-control" placeholder="password" name="password" required="true" ><br>
                          <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                    <br>
                          <button input type="submit" class="btn btn-primary">submit</a><br>
                        </form>
                  </div>
                  <div class="panel-footer">
                      <p >don't have an account?<a href="signup.php">register?</a></p>
                  </div>
              </div>
          </div>
   <?php
       include "../includes/footer.php";

   ?>
    </body>
</html>