<?php
    require "../includes/common.php";
    if(isset($_SESSION['email']))
    {
        header("location:products.php");
    }
    ?>
<!DOCTYPE <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>signup_page</title>
        <meta name="description" content="signup_page">
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
       <?php
            include "../includes/header.php";
       ?>
        <div class="container-fluid border">
        <form  action="user_script.php" method="POST">
         <div class="form-horizontal form">
         <div class="form-group">
            <h3>SIGN UP</h3>
             <label for="name" class="sr-only"></label>
             <input type="text" id="name" class="form-control" placeholder="name" name="name" required="true" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
             </div>

             <div class="form-group">  
             <label for="email" class="sr-only"></label>
             <input type="email" id="email" class="form-control" placeholder="email" name="email" required="true" > 
             <?php
                 if(isset($_GET['m1']))
                echo $_GET['m1'];
             ?>
            </div>

             <div class="form-group">
             <label for="password" class="sr-only"></label>
             <input type="password" id="password" class="form-control" placeholder="password" name="password" required="true">
            </div>

             <div class="form-group">
             <label for="contact" class="sr-only"></label>
             <input type="tel" id="contact" class="form-control" placeholder="contact" name="contact" required="true" >
            </div>

             <div class="form-group">
             <label for="city" class="sr-only"></label>
             <input type="text" id="city" class="form-control" placeholder="city" name="city" required="true" >
            </div>

             <div class="form-group">
             <label for="address" class="sr-only"></label>
             <input type="text" id="address" class="form-control" placeholder="address" name="address" required="true">
             </div>
            
             <button id="button" type="submit" name="submit" class="btn btn-primary" >submit </button>
         </div>
        </form>
    </div>
      <?php
         include "../includes/footer.php";
      ?>
    </body>
    </html>