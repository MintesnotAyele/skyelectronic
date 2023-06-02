var images = [
         'imageforproject/blue.jpg',
        'imageforproject/logo1.png',
     'imageforproject/blue.jpg)',
    'imageforproject/keyboard2.webp',
  'imageforproject/hot4.png',
  'imageforproject/tv6.png'];
  
  var currentIndex = 0;
  var backgroundElement = document.querySelector('.body1');
  
  function changeBackgroundImage() {
    backgroundElement.style.backgroundImage = `url(${images[currentIndex]})`;
    currentIndex = (currentIndex + 1) % images.length;
  }
  setInterval(changeBackgroundImage, 4000);
  