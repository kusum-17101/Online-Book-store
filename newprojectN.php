<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location:2.html');
}
?>
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="style_navigation_bar.css">
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="floatingbox.css">
<link rel="stylesheet" type="text/css" href="headersearch.css">
<link rel="stylesheet" type="text/css" href="flipbox.css">
<link rel="stylesheet" type="text/css" href="slide.css">
<link rel="stylesheet" type="text/css" href="imagemagnifier.css">

<script src="form.js"></script> 

</head>

<body>
	
<div class="container">

<header>
<img src="5dd92720-ccc7-46cf-b058-0d112bd623f9[1] - Copy.jpg" style="width:150px; height:90px; float:right;"></img>

<img src="Book-Desktop-Wallpapers-HD-620x395.jpg" style="width:90px; height:70px; float:left;"></img>

<form>
 <p style="color:grey; font-size:25px;"> Books <input class="shakti" type="text" name="search" placeholder="Search...."></p>
</form>





</header>



   <nav>
<ul >
  <li><a href="#home" style="text-decoration:none">Home12</a></li>
  <li><a href="toptenbooks.php" style="text-decoration:none">Top 10 Books</a></li>
  <li class="dropdown" >
    <a href="#" class="dropbtn" style="text-decoration:none">Authors</a>
    <div class="dropdown-content">
      <a href="#" >Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
  <li class="dropdown" >
    <a href="#" class="dropbtn" style="text-decoration:none">Publishersasd</a>
    <div class="dropdown-content">
      <a href="#" >Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li><li class="dropdown" >
    <a href="#" class="dropbtn" style="text-decoration:none">Fiction</a>
    <div class="dropdown-content">
      <a href="#" >Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li><li class="dropdown" >
    <a href="#" class="dropbtn" style="text-decoration:none">Non-Fiction</a>
    <div class="dropdown-content">
      <a href="#" >Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
</ul>
</nav>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Aged-Inventory-Blowout-2016.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="WebNinja_Interalia_Banner-01.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Aged-Inventory-Blowout-2016.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

	<form  class='sha' action="action_page.php">
	<p style="color:orange";>Feed Back Form<br></p>

    <label for="name">Name *&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
    <input type="text" id="name" name="Name" placeholder="Username" autofocus> <br><br>

   <label for="email">Email *&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
  
  <input type="email" id="email" name="email" placeholder="email_id@gmail.com"><br>
 <br>

   <label for="Telephone">Telephone *</label>
    <input type="text" id="Telephone1" name="Telephone1" size="3" placeholder="Phone_no." maxlength="3" onkeyup="movetoNext(this, 'Telephone2')" >-<input type="text" id="Telephone2" placeholder="Phone_no." name="Telephone2" size="3" maxlength="3" onkeyup="movetoNext(this, 'Telephone3')" >-<input type="text" id="Telephone3" placeholder="Phone_no." name="Telephone3" size="3" maxlength="4">

  
 <br><label for="Regarding">Regarding&nbsp&nbsp&nbsp </label>
  
  <select id="Regarding" name="Regarding"> 
     <option value="general">general</option>
      <option value="formal">formal</option>
 </select><br>
  

 <label for="message">Message *&nbsp&nbsp&nbsp </label>
 
   <input style="padding: 40px 20px;" type="message" id="message" name="message" placeholder="Message"><br>
<br>
    <input type="submit" value="Submit">
  </form>
  <table>
	Name <?php 

	echo $_SESSION['uname'];
?>


  
<article>
<div class="floating-box" >

<div class="flip3D">
  <div class="back">
  <a href="amish.php">
  <img src="scionofikshvakuback.jpg" alt="Scion og ikshvaku" class="pic" style="width:140px; height:200px;">
  
<img src="ati.jpg"  alt="Scion Of Ikshvaku" class="picbig flashit">
</a>
</div>
  <div class="front"><img src="ati.jpg"  alt="Scion Of Ikshvaku" style="width:140px; height:200px;"></div>
</div>
<br>Scion Of Ikshvaku<br>Amish Tripathi<br>Paperback<br>Rs 164
</div>

<div class="floating-box" >
<div class="flip3D">
  <div class="back">
  <a href="aravindadiga.php">
  <img src="aravindadigaback.jpg" alt="Aravind Adiga" class="pic" style="width:140px; height:200px;">
  <img src="21SM_adiga_jpg_2979842e.jpg" alt="Aravind Adiga" class="picbig flashit">
  </a>
  </div>
  <div class="front"><img src="21SM_adiga_jpg_2979842e.jpg" alt="Aravind Adiga" style="width:140px; height:200px;"></div>
</div>
<br>Selection Day<br>Aravind Adiga<br>Hardcover<br>Rs 389
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back">
  <a href="inferno.php">
  <img src="infernoback.jpg" alt="inferno" class="pic" style="width:140px; height:200px;">
  <img src="inferno.jpg" alt="inferno" class="picbig flashit" >
  </a>
  </div>
  <div class="front"><img src="inferno.jpg" alt="inferno" style="width:140px; height:200px;" ></div>
</div>
<br>Inferno<br>Dan Brown<br>Paperback<br>Rs 231
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back">
  <a href="davincecode.php">
  <img src="DaVinciCodeback.jpg" alt="Da Vinci Code" class="pic" style="width:140px; height:200px;">
  <img src="davincicode.jpg" alt="Da Vinci Code" class="picbig flashit">
  </a>
  </div>
  <div class="front"><img src="davincicode.jpg" alt="Da Vinci Code" style="width:140px; height:200px;"></div>
</div>
<br>The Da-Vinci Code<br>Dan Brown<br>Paperback<br>Rs 225
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back">
  <a href="lostsymbol.php">
  <img src="The-Lost-Symbolback.jpg" alt="The Lost Symbol" class="pic" style="width:140px; height:200px;">
  <img src="thelostsymbol.jpg" alt="The Lost Symbol" class="picbig flashit">
  </a>
  </div>
  <div class="front"><img src="thelostsymbol.jpg" alt="The Lost Symbol" style="width:140px; height:200px;"></div>
</div>
<br>The Lost Symbol<br>Dan Browni<br>Paperback<br>Rs 230
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back">
  <a href="angelsanddemons.php">
  <img src="angels and sdemonsback.jpg" alt="Angels and demons"  class="pic" style="width:140px; height:200px;">
  <img src="Angels And Demons.jpg" alt="Angels and demons" class="picbig flashit">
  </a>
  </div>
  <div class="front"><img src="Angels And Demons.jpg" alt="Angels and demons" style="width:140px; height:200px;" ></div>
</div>
<br>Angels and demons<br>Dan Brown<br>Paperback<br>Rs 248
</div>

<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="kane-and-abel.jpeg"  alt="kane and abel.jpeg" class="picbig flashit">
  </div>
  <div class="front"><img src="kane-and-abel.jpeg"  alt="kane and abel.jpeg" style="width:140px; height:200px;"></div>
</div>
<br>Kane and Abel<br>Jeffery Archer<br>Paperback<br>Rs 229
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="The Sins of the Father.jpg" alt="The Sins of the Father" class="picbig flashit">
  </div>
  <div class="front"><img src="The Sins of the Father.jpg" alt="The Sins of the Father" style="width:140px; height:200px;"></div>
</div>
<br>The Sins of the Father<br>Jeffery Archer<br>Paperback<br>Rs 245
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  
  <img src="Only Time Will tell.jpg" alt="Only Time Will tell" class="picbig flashit">
  </div>
  <div class="front"><img src="Only Time Will tell.jpg" alt="Only Time Will tell" style="width:140px; height:200px;"></div>
</div>
<br>Only Time Will tell<br>Jeffery Archer<br>Paperback<br>Rs 265
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="Best-Kept-Secret.jpg" alt="Best Kept Secret" class="picbig flashit">
  </div>
  <div class="front"><img src="Best-Kept-Secret.jpg" alt="Best Kept Secret" style="width:140px; height:200px;"></div>
</div>
<br>Best Kept Secret<br>Jeffery Archer<br>Paperback<br>Rs 239
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="Five Point someone.jpg" alt="Five Point someone" class="picbig flashit">
  </div>
  <div class="front"><img src="Five Point someone.jpg" alt="Five Point someone" style="width:140px; height:200px;"></div>
</div>
<br>Five Point someone<br>Chetan Bhagat<br>Paperback<br>Rs 123
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="half-girlfriend.jpg" alt="half-girlfriend" class="picbig flashit">
  </div>
  <div class="front"><img src="half-girlfriend.jpg" alt="half-girlfriend" style="width:140px; height:200px;" ></div>
</div>
<br>Half-Girlfriend<br>Chetan Bhagat<br>Paperback<br>Rs 88
</div>





<div class="floating-box" >
<div class="flip3D">
  <div class="back">
  <a href="immortalsofmeluha.html">
  <img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="Immortals Of Meluha.jpg" alt="Immortals Of Meluha" class="picbig flashit">
  </a>
  </div>
  <div class="front"><img src="Immortals Of Meluha.jpg" alt="Immortals Of Meluha" style="width:140px; height:200px;"></div>
</div>
<br>The Secrets Of Nagas<br>Amish Tripathi<br>Paperback<br>Rs 147
</div>

<div class="floating-box" >
<div class="flip3D">
  <div class="back">
  <a href="secretofnagas.html">
  <img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="The Secrets Of Nagas.jpg" alt="The Secrets Of Nagas" class="picbig flashit"></a>
  </div>
  <div class="front"><img src="The Secrets Of Nagas.jpg" alt="The Secrets Of Nagas" style="width:140px; height:200px;"></div>
</div>
<br>The Secrets Of Nagas<br>Amish Tripathi<br>Paperback<br>Rs 147
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back">
  <a href="onenightatthecallcenter.html">
  <img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="One Night At The Call Centre.jpg" alt="One Night At The Call Centre" class="picbig flashit">
  </a>
  </div>
  <div class="front"><img src="One Night At The Call Centre.jpg" alt="One Night At The Call Centre" style="width:140px; height:200px;"></div>
</div>
<br>One Night At The Call Centre<br>Chetan Bhagat<br>Paperback<br>Rs 99
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="Three Mistakes Of My Life.jpg" alt="Three Mistakes Of My Life" class="picbig flashit">
  </div>
  <div class="front"><img src="Three Mistakes Of My Life.jpg" alt="Three Mistakes Of My Life" style="width:140px; height:200px;"></div>
</div>
<br>Three Mistakes Of My Life<br>Chetan Bhagat<br>Paperback<br>Rs 107
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="Two States.jpg" alt="Two States" class="picbig flashit">
  </div>
  <div class="front"><img src="Two States.jpg" alt="Two States" style="width:140px; height:200px;"></div>
</div>
<br>Two States<br>Chetan Bhagat<br>Paperback<br>Rs 122
</div>
<div class="floating-box" >
<div class="flip3D">
  <div class="back"><img src="DaVinciCode.jpg" alt="Five Point someone" class="pic" style="width:140px; height:200px;">
  <img src="Revolution 2020.jpg" alt="Revolution 2020" class="picbig flashit">
  </div>
  <div class="front"><img src="Revolution 2020.jpg" alt="Revolution 2020" style="width:140px; height:200px;" ></div>
</div>
<br>Revolution 2020<br>Chetan Bhagat<br>Paperback<br>Rs 107
</div>


</article>

<a href="logout.php">Logout</a>
<footer>Copyright © MY Books Store.com</footer>

</div>

</body>
</html>
