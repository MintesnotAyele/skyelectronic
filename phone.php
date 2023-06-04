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
  <link rel="stylesheet" href="phone.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


</head>
<body>
<!--This is header for phone page products-->
<div class="header">
      
  <div class="nav_inner"><a><h1>SKY PHONES</h1></a></div>

  <div class="nav_inner">
    <div class="linkss">
     
      <a href="phone.php" >Phones</a>
      <a href="computer.php">Computers</a>
      <a href="camera.php">cameras</a>
      <a href="access.html">Accessories</a>
      <a href="tv.php">TV</a>
    </div>
  </div>
  <div class="nav_inner">
              		 
        </div>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="home.html">Home</a>
          <a href="logout.php">Logout</a>
          <a href="cart1.php">Cart</a>
          <a href="#foot">About Us</a>
          <a href="#foot">Contact Us</a>
        </div> 
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
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
        <span>PHONES</span>
      </div>
      <div class="body">
        <div class="collection">
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/promax14.png" alt=""></a>
              </div>

              <div class="discription">
                <h3 class="title">iphone-14 promax</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 66500 ETB</h3>
                <P class="dis"> 128GB, Deep Purple -<br> Unlocked (Renewed Premium)</P>
                <?php if(!isset($_SESSION['email'])){  ?>
                <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                <?php
              }else {
                ?>
                  <h3 class="orderbox"><a href="cart_add.php?id=1" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                <?php
              }
              ?> 
               
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/iphone13.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">iphone-13 promax</h3>
                <h3 class="dis">Available in store</h3>
                <h4 class="dis"> Waterproof Drop Protective Case, <br>Fre Series,Golden</h4>
                <h3 class="dis">Price : 45000 ETB</h3>
                <?php if(!isset($_SESSION['email'])){  ?>
                <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                <?php
              }
              else {
                ?>
 <h3 class="orderbox"><a href="cart_add.php?id=2" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                    <?php
                  }
                ?>
            
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/iphone12.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">iphone-11</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">256GB, Space Golden<br> - Unlocked (Renewed)</h3>
                <h3 class="dis">Price : 30000 ETB</h3>
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=3" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?>    
               
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/pro11.jpg" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">iphone-12 promax plus</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis"> 128GB, Pacific Blue - <br>Unlocked (Renewed Premium)</h3>
                <h3 class="dis">Price : 11500 ETB</h3>
            
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=4" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
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
                <a href="#"><img class="image" src="imageforproject/sama41.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">Samsung S-23 ultra</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">256GB Storage, 200MP Camera,Long Battery Life,
                  <br>US Version, 2023, Phantom Black</h3>
                <h3 class="dis">Price : 60000 ETB</h3>
              
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=5" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?>            
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/samms10.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">Samsung S-10</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 15500 ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=6" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?>                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/ultra1.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">Samsung S-21</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 100,000 ETB</h3>
         
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=7" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?>      
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/Z-Fold3galaxy.png" alt=""></a>
              </div>
              <div class="discription">
                <!-- <h3 class="title">Samsung S-10 light</h3> -->
                <h3 class="title">Z-Fold3galaxy</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :54000 ETB</h3>
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=8" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
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
   <footer id="foot"  class="footer">
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
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

  </body>

