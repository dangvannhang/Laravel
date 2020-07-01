<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/style.css" rel="stylesheet" type="text/css">
    
    <script src="../Js/slideShow.js" type="script"></script>
    <title>House for rent</title>
   
</head>
<body>
    <div id="header">
        <div class="inner-header">
            <div class="logo-container">
                <img src="./Images/logo.png" alt="">
            </div>
            <ul class="navigation">
                <a href="#"><li>Đăng Nhập</li></a>
                <a href="#"><li>Đăng Kí</li></a>
            </ul>
        </div>
    </div>


    <div id="banner">
        <div class="slideshow-container" >
            <div class="mySlides fade">
                <img src="./Images/slideShow1.jpg" alt="" style="width:100%; height:100%;">
                <div class="text">My text</div>
            </div>
            <div class="mySlides fade">
                <img src="./Images/slideShow1.jpg" alt="" style="width:100%;">
                <div class="text">My text</div>
            </div>
            <div class="mySlides fade">
                <img src="./Images/slideShow1.jpg" alt="" style="width:100%;">
                <div class="text">My text</div>
            </div>
            <div class="mySlides fade">
                <img src="./Images/slideShow1.jpg" alt="" style="width:100%;">
                <div class="text">My text</div>
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    </div>
    <div id="content">
        <div id="LeftContent">

        </div>
        <div id="MainContent">
      
        </div>
    </div>
    <div id="footer">
    </div>
    
    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>