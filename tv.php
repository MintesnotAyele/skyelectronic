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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
 right: 0;
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
      
  <div class="nav_inner"><a><h1>SKY TV'S</h1></a></div>

  <div class="nav_inner">
    <div class="linkss">
     
      <a href="phone.php" >Phones</a>
      <a href="computer.php">Computers</a>
      <a href="camera.php">cameras</a>
      <a href="access.php">Accessories</a>
      <a href="tv.php">TV</a>
    </div>
  </div>
  <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="home.html"><i class="fa fa-home" style="font-size:36px ;color:aliceblue;margin-left: 10px;"></i>Home</a>
          <a href="logout.php"> <i class="fa fa-sign-out" style="font-size:36px;color:rgb(230, 223, 223)"></i>Logout</a>
          <a href="cart1.php"><i class="fa fa-shopping-cart" style="font-size:36px;color:rgb(240, 235, 235)"></i>Cart</a>
          <a href="#foot"><i class="fa fa-at" style="font-size:36px;color:aliceblue;"></i>About Us</a>
          <a href="#foot"> <i class="fa fa-address-book" style="font-size:36px;color:aliceblue;margin-left: 20px;"></i>Contact Us</a>
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
              <h3 class="title">SAMSUNG</h3>
             <h3 class="dis">  SAMSUNG 32-inch Class LED Smart FHD TV <br>1080P (UN32N5300AFXZA, 2018 Model)</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :24000ETB</h3>
             
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
                <h3 class="title">HISENCE</h3>
                <p class="dis">
                  Hisense 65-Inch Class R6 Series Dolby Vision HDR 4K UHD <br>
                  Smart TV with Alexa Compatibility</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 50000 ETB</h3>


               
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
               <h3 class="title">LG</h3>
                <p class="dis"> LG 55-Inch Class UQ9000 Series Alexa Built-in 4K <br>Smart TV (3840 x 2160), 60Hz Refresh Rate,</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 20000 ETB</h3>
           
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
               <h3 class="title">SUPERSONIC</h3>
                <p class="dis">Supersonic SC-1311 13.3-Inch 1080p LED Widescreen <br>HDTV with HDMI Input (AC/DC Compatible)</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :60000ETB</h3>
            
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
                <h3 class="title">SONY</h3>
                <p class="dis">Sony SRS-XG300 X-Series Wireless Portable-Bluetooth <br>
                  Party-Speaker IP67 Waterproof and Dustproof 
                  </p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :89900ETB</h3>
              
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
                <h3 class="title">REDRAGON</h3>
                <p class="dis">
                  Amazon's Choice
                  Redragon GS520 RGB Desktop Speakers,Computer Stere<br>
                   Speaker with 6 Colorful LED Modes
                 </p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :6000 ETB</h3>
           
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
               <h3 class="title">SKPPAL_SPEAKER</h3>
                <h3 class="dis">Available in store</h3>
                <p class="dis">SPKPAL Computer Speakers RGB Gaming Speakers<br> for PC 2.0 Wired USB Powered Stereo</p>
                <h3 class="dis">Price : 4900 ETB</h3>
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
                <h3 class="title">SPEAKER</h3>
                <p class="dis">Soundcore Anker Motion Boom Outdoor Speaker with<br> Titanium Drivers, BassUp Technology,</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :5000 ETB</h3>
           
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
