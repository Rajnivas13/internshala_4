 <?php
     require "../includes/common.php";
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
        <?php
             include "../includes/header.php";
             include "../includes/check-if-added.php";
        ?>
          <div class="container-fluid" style="background: none">
            <div class="row">
            <br>
                     <div class="jumbotron">
                      <h1 class="h">Welcome to our Lifestyle Store!</h1>
                      <P>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</P>
                  </div>
            <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                <div class="thumbnail">
                 <img src="../Bootstrap_Assignment/1.jpg" alt="camera" width="100%" height="auto">
                  <div class="caption">
                  <br>
                   <h4>canon EOS</h4>
                   <p>price Rs.36000</p>
                   <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                  </div>
                </div>
            </div>

                <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                  <div class="thumbnail">
                    <img src="../Bootstrap_Assignment/2.jpg" alt="camera" width="100%">
                     <div class="caption">
                      <h4>sony DSLR</h4>
                      <p>price Rs.40000</p>
                      <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                     </div>
                </div>
                </div>

                <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                     <div class="thumbnail">
                        <img src="../Bootstrap_Assignment/3.jpg" alt="camera" width="100%">
                         <div class="caption">
                          <h4>sony DSLR</h4>
                          <p>price Rs.50000</p>
                          <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                         </div>
                     </div>
                </div>
                
                <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                         <div class="thumbnail">
                            <img src="../Bootstrap_Assignment/4.jpg" alt="camera" width="100%">
                             <div class="caption">
                              <h4>olympus DSLR</h4>
                              <p>price Rs.80000</p>
                              <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                             </div>
                            </div>
                       </div>
                </div>

                <div class="row">
                    <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                        <div class="thumbnail">
                           <img src="../Bootstrap_Assignment/5.jpg" alt="watches" width="100%">
                            <div class="caption">
                             <h4>Titan model #301</h4>
                             <p>price Rs.13000</p>
                             <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                     echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                            </div>
                           </div>
                      </div>

                <div class=" col-xs-3 col-md-3 col-sm-3 col-lg-3">
                    <div class="thumbnail">
                       <img src="../Bootstrap_Assignment/6.jpg" alt="watches" width="100%">
                        <div class="caption">
                         <h4>Titan model #201</h4>
                         <p>price Rs.3000</p>
                         <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                        </div>
                       </div>
                  </div>

                  <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                    <div class="thumbnail">
                       <img src="../Bootstrap_Assignment/7.jpg" alt="watches" width="100%">
                        <div class="caption">
                        <br>
                         <h4>titan</h4>
                         <p>price Rs.36000</p>
                         <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                        </div>
                       </div>
                  </div>

                  <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                    <div class="thumbnail">
                       <img src="../Bootstrap_Assignment/8.jpg" alt="watches" width="100%">
                        <div class="caption">
                         <h4>HMT milan</h4>
                         <p>price Rs.8000</p>
                       <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                        </div>
                       </div>
                  </div>
           </div>

           <div class="row">
            <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                <div class="thumbnail">
                   <img src="../Bootstrap_Assignment/9.jpg" alt="shirts" width="100%">
                    <div class="caption">
                     <h4>H&W</h4>
                     <p>price Rs.800</p>
                   <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                    </div>
                   </div>
              </div>
             
                <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                    <div class="thumbnail">
                       <img src="../Bootstrap_Assignment/10.jpg" alt="shirts" width="100%">
                        <div class="caption">
                         <h4>Luis phill</h4>
                         <p>price Rs.1000</p>
                         <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                        </div>
                       </div>
                  </div>

                  
                    <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                        <div class="thumbnail">
                           <img src="../Bootstrap_Assignment/11.jpg" alt="shirts" width="100%">
                            <div class="caption">
                             <h4>jokn zork</h4>
                             <p>price Rs.1500</p>
                              <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                            </div>
                           </div>
                      </div>

                      
                        <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                            <div class="thumbnail">
                               <img src="../Bootstrap_Assignment/12.jpg" alt="shirts" width="100%">
                                <div class="caption">
                                 <h4>jhalsani</h4>
                                 <p>price Rs.1300</p>
                                  <?php 
                   if (!isset($_SESSION['email'])) { ?>
                   <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy
                   Now</a></p>
                   <?php
                     } else {
                     //We have created a function to check whether this particular product is addedto cart or not.
                   if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {
                    ?>
                  <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                   <?php
                    }
                   }
                ?>
                                </div>
                               </div>
                          </div>
                   </div>
                     <?php
                         include "../includes/footer.php";
                     ?>
                   </div>
                </div>
    </body>
</html>