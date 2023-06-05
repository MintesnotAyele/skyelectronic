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
  <link rel="stylesheet" href="camera.css">
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
      
<div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="home.html"><i class="fa fa-home" style="font-size:36px ;color:aliceblue;margin-left: 10px;"></i>Home</a>
          <a href="logout.php"> <i class="fa fa-sign-out" style="font-size:36px;color:rgb(230, 223, 223)"></i>Logout</a>
          <a href="cart1.php"><i class="fa fa-shopping-cart" style="font-size:36px;color:rgb(240, 235, 235)"></i>Cart</a>
          <a href="#foot"><i class="fa fa-at" style="font-size:36px;color:aliceblue;"></i>About Us</a>
          <a href="#foot"> <i class="fa fa-address-book" style="font-size:36px;color:aliceblue;margin-left: 20px;"></i>Contact Us</a>
        </div> 

<span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>

  <div class="nav_inner"><a><h1>SKY cameras</h1></a></div>

  <div class="nav_inner">
    <div class="linkss">
     
      <a href="phone.php" >Phones</a>
      <a href="computer.php">Computers</a>
      <a href="camera.php">cameras</a>
      <a href="access.php">Accessories</a>
      <a href="tv.php">TV</a>
    </div>
  </div>
</div>



      <div class="cont">
 
        <div class="body1">
          <h2>SKY ELECTRONICS <br> STORE</h2>
        </div>


  <div class="all">
    <div class="display"></div>
    <div class="container" id="phones">
      <div class="menubar">
        <span>cameras</span>
      </div>

<!--This is END OF header for camera  page -->



      
      <div class="body">
        <div class="collection">
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/cam11.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">camera1</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 66500 ETB</h3>
             
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=17" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
              
               
               
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/cam7jpg.jpg" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">camera2</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 45000 ETB</h3>


               
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=18" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
          
            
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/cam10.jpg" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">camera3</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :.....ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=19" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
                
               
               
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/cam6.jpg" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">camera4</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :.... ETB</h3>
            
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=20" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
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
                <a href="#"><img class="image" src="imageforproject/cam5.jpg" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">camera5</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : ........ ETB</h3>
              
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=21" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
            
              
      
                
               
         
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/cam9.jpg" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">camera6</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : ....ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=22" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
                
            
             
                
                
                    
              
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/canonxa45.png" alt=""></a>
              </div>
              <div class="discription">
                <h3 class="title">camera7</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :,,,,,,,, ETB</h3>
         
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=23" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
            
                
      
            
                     
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/canonxa55.png" alt=""></a>
              </div>
              <div class="discription">
                <!-- <h3 class="title">Samsung S-10 light</h3> -->
                <h3 class="title">camera8</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : ...... ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=24" class="order">Add to cart</a></h3>
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
            <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
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

