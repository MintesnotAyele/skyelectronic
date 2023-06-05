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
  <link rel="stylesheet" href="computer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  >
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
      
  <div class="nav_inner"><a><h1>SKY COMPUTERS</h1></a></div>

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
  <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
</div>

<!--This is END OF header for computer  page -->





      <div class="cont">
 
        <div class="body1">
          <h2>SKY ELECTRONICS <br> STORE</h2>
        </div>
      

  <div class="all">
    <div class="display"></div>
    <div class="container" id="phones">
      <div class="menubar">
        <span>COMPUTERS</span>
      </div>


      
      <div class="body">
        <div class="collection">
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/pcasus1.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">ASUS</h3>
                <p class="dis">Core™ i5-11400F, GeForce RTX 3050,16GB DDR4 RAM,<br>512GB SSD,Windows11Home</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 15000 ETB</h3>
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=9" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
              
               
               
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/pcasus2.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">LENOVO</h3>
                <p class="dis">NVIDIA GeForce RTX 3060 |Gray |Windows 11 (Gray, 16GB RAM<br> |512GB SSD+1TB HDD)</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 25000 ETB</h3>
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=10" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 

          
            
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/pchp2.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">ASUSPHILLY</h3>
                <p class="dis"> AMD Ryzen 7 3700X, GeForce GTX 1660 Ti,16GBRAM,<br>512GB PCIe SSD, Wi-Fi 5, Windows 10 Home,</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 30000 ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=11" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
                
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/pcleno1.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">LENOVOY50</h3>
                <h3 class="dis">Available in store</h3>
                <p class="dis"> Legion 5i- Intel Core i7-11800H - <br>8GB RAM - 1TB SSD - NVIDIA GeForce RTX 3050 </p>
                <h3 class="dis">Price : 11500 ETB</h3>
            
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=12" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
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
                <a href="#"><img class="image" src="imageforproject/pchp3.webp" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">HPROG</h3>
                <p class="dis">HP 2022 Pavilion Gaming 15.6" , AMD Ryzen 5-5600H <br>, 16GB RAM, 1TB HDD+256GB SSD,</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 60000 ETB</h3>
              
              
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=13" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
            
              
      
                
               
         
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/pchp4.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">HPROG2</h3>
                <p class="dis">15.6" FHD - 120Hz - AMD Ryzen 5 6600H - NVIDIA <br>GeForce RTX 3050 - 8GB DDR5 RAM - 256GB</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 55000 ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=14" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?> 
                
            
             
                
                
                    
              
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/hpPavilon2.jpg" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">ASUSG20</h3>
                <p class="dis"> Intel i9-13900HX,RTX 4060 8GB,32GB RAM, 1TB<br> NVMe SSD,TBT 4, Win 11
                  4.8 out of 5 stars 19</p>
               
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 45000 ETB</h3>
         
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=15" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
                      <?php
                    }
                  ?>         
                
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/dell.webp" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">HPYOGA</h3>
                <p class="dis">Intel Core i7-12700H RTX 3070 16GB 512GB NVMe SSD <br>,RGB Gaming Keyboard,Win11 Home: </p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 55000 ETB</h3>
           
                <?php if(!isset($_SESSION['email'])){  ?>
                  <h3 class="orderbox"><a href="loginpage.html" role="button" class="order">Order now</a> </h3>
                  <?php
                }
                else {
                  ?>
   <h3 class="orderbox"><a href="cart_add.php?id=16" class="order" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></h3>
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
<footer id="foot" class="footer">
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

