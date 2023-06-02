<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="tv.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<!--This is header for phone page products-->
<div class="header">
      
  <div class="nav_inner"><a><h1>SKY TV'S</h1></a></div>

  <div class="nav_inner">
    <div class="linkss">
     
      <a href="phone.php" >Phones</a>
      <a href="computer.php">Computers</a>
      <a href="camera.php">cameras</a>
      <a href="access.html">Accessories</a>
      <a href="tv.php">TV</a>
    </div>
  </div>
</div>


<!--This is for first body-->
<div class="cont">
 
  <div class="body1">
    <h2>SKY ELECTRONICS <br> STORE</h2>
  </div>

  <div class="all">
    <div class="display"></div>
    <div class="container" id="phones">
      <div class="menubar">
        <span>TV & Speakers</span>
      </div>
      <div class="body">
        <div class="collection">
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/tv3.avif" alt=""></a>
              </div>

              <div class="discription">
                <h3 class="title">1</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :..... ETB</h3>
             
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=25" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
              
               
               
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/tv5.jpeg" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">2</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : ...... ETB</h3>


               
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=26" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
          
            
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/tv4.jpg" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">3</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : ....... ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=27" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
                
                
                 
                  
               
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/tv10.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">4</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : .... ETB</h3>
            
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=28" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
          
          
             
               
              </div>
            </div>
          </div>
        </div>
        <div class="collection">
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/speaker1.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">5</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :.......ETB</h3>
              
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=29" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
            
              
      
                
               
         
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/speaker2.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">6</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :...... ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=30" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
                
            
             
                
                
                    
              
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/speaker3.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">7</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : ...... ETB</h3>
         
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=31" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
            
                
      
            
                     
                
              </div>
            </div>
          </div>



          <div class="item">
            <div class="inner">

              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/speaker5.png" alt=""></a>
              </div>

              <div class="discription">
                <!-- <h3 class="title">Samsung S-10 light</h3> -->
                <h3 class="title">8</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : .......ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=32" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
              </div>
            </div>    
          </div>    
                
        </div>
      </div>
    </div>



    <!--thi is for footer-->
    <footer class="footer">
      <div class="containeer">
        <div class="footer-content">
          <div class="footer-column">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra consectetur magna in tincidunt.</p>
          </div>
          <div class="footer-column">
            <h3>Contact Us</h3>
            <ul class="contact-list">
              <li>Email: info@example.com</li>
              <li>Phone: +1 123 456 7890</li>
              <li>Address: 123 Street, City, Country</li>
            </ul>
          </div>
          <div class="footer-column">
            <h3>Follow Us</h3>
            <ul class="social-icons">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  </body>
