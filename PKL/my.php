<html>
<title>Blog.</title>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="http://localhost/PKL/about.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" style="font-family:Girassol">About Me</a>
    <a href="http://localhost/pkl/my.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" style="font-family:Girassol">Photos</a>
    <a href="http://localhost/PKL/Majalah.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" style="font-family:Girassol">Magazine</a>
    
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span> 
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1 style="font-family:Girassol"><b>R'OCK STATION</b></h1>
  <p style="font-family: Josefin Sans, sans-serif;"><b>Garage Photos.</b></p>
  <p class="w3-padding-16"><button class="w3-button w3-black" onclick="myFunction()" style="font-family:Girassol">Border</button></p>
</header>
</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="moto/a.jpg" style="width:100%">
    <img src="moto/e.jpg" style="width:100%">
    <img src="moto/h.jpg" style="width:100%">
    <img src="moto/k.jpg" style="width:100%">
    <img src="moto/n.jpg" style="width:100%">
    <img src="moto/s.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="moto/b.jpg" style="width:100%">
    <img src="moto/f.jpg" style="width:100%">
    <img src="moto/q.jpg" style="width:100%">
    <img src="moto/l.jpg" style="width:100%">
    <img src="moto/o.jpg" style="width:100%" >
    <img src="moto/r.jpg" style="width:100%;height:583">
  </div>

  <div class="w3-third">
    <img src="moto/d.jpg" style="width:100%">
    <img src="moto/g.jpg" style="width:100%">
    <img src="moto/j.jpg" style="width:100%">
    <img src="moto/m.jpg" style="width:100%">
    <img src="moto/p.jpg" style="width:100%">
    <img src="moto/t.jpg" style="width:100%;height:495">
  </div>
</div>

<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"> 
<a href="https://www.facebook.com/ratalix.angel.5"><i class="fa fa-facebook-official w3-hover-opacity" ></i></a>
<a href="https://www.instagram.com/farhanar2/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  
  <p class="w3-medium" style="font-family:Girassol">R' STATION  <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green"></a>GARAGE</p>
</footer>
 
<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>