<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="access.css">

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

  <div class="nav_inner"><a><h1>SKY ACCESSORIES</h1></a></div>

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

<!--This is header for body one-->
      <div class="cont">
 
        <div class="body1">
          <h2>SKY ELECTRONICS <br> STORE</h2>
        </div>
      


  <div class="all">
    <div class="display"></div>
    <div class="container" id="phones">
      <div class="menubar">
        <span>ACCESSORIES</span>
      </div>

<!--This is END OF header for camera  page -->
      
      <div class="body">
        <div class="collection">
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/keyboard3.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">KEYBOARD1</h3>
                <p class="dis">
                 
                  Dacoity Gaming Keyboard, 104 Keys All-Metal Panel, Rainbow <br>LED Backlit ,
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 1200 ETB</h3>
             
                <h3 class="orderbox"><a href="login.php" role="button" class="orderbutton">Order now</a> </h3>
              
               
               
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/accesskeyboard.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">KEYBOARD2</h3>
                <p class="dis">Razer Ornata V3 X Gaming Keyboard: Low-Profile Keys - Silent Membrane<br></p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 1000 ETB</h3>



               
                <h3 class="orderbox"><a href="login.php" role="button" class="orderbutton">Order now</a> </h3>
          
            
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/mouse2.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">MOUSE1</h3>
                <p class="dis">Logitech G502 Hero High Performance Wired Gaming</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :650ETB</h3>
           
           
                <h3 class="orderbox"><a href="login.php" role="button" class="orderbutton">Order now</a> </h3>
                
                
                 
                  
               
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/mouse3.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">MOUSE2</h3>
                <p class="dis">Logitech G502 Hero High Performance Wired Gaming</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price :650ETB</h3>
             
                <h3 class="orderbox"><a href="login.php" class="orderbutton">Order now</a> </h3>
          
          
             
               
              </div>
            </div>
          </div>
        </div>
        <div class="collection">
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/access1.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">KEYBOARD2</h3>
                <p class="dis">Razer Ornata V3 X Gaming Keyboard: Low-Profile Keys - Silent Membrane<br> Switches - Spill</p>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 1000 ETB</h3>

                <h3 class="orderbox"><a href="login.php" class="orderbutton">Order now</a> </h3>
            
              
      
                
               
         
              </div>
            </div>
          </div><div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/ram.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">RAM</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 2000 ETB</h3>
           
                <h3 class="orderbox"><a href="login.php"  class="orderbutton">Order now</a> </h3>
                
            
             
                
                
                    
              
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/harddisk1.png" alt=""></a>
              </div>
              <div class="discription">
              <h3 class="title">HARD_DISK1</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 4000ETB</h3>
         
                <h3 class="orderbox"><a href="login.php" class="orderbutton">Order now</a> </h3>
            
                
      
            
                     
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner">
              <div class="photo">
                <a href="#"><img class="image" src="imageforproject/harddisk2.webp" alt=""></a>
              </div>
              <div class="discription">
                <!-- <h3 class="title">Samsung S-10 light</h3> -->
                <h3 class="title">HARD_DISK2</h3>
                <h3 class="dis">Available in store</h3>
                <h3 class="dis">Price : 4000ETB</h3>
           
                <h3 class="orderbox"><a href="login.php"  class="orderbutton">Order now</a> </h3>
              
               
               
                
                
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
</html>

