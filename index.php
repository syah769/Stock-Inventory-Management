<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
body,td,th {
	font-family: Lato, sans-serif;
}
body {
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="About_us.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About us</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact us</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Notifications">Vendor <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="index1.php" class="w3-bar-item w3-button">KHH BISTARI TRADING</a>
      
     
    </div>
  </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">About us</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact us</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Vendor</a>
  </div>
</div>



<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:50px 8px">
    <table boarder ="1">
<tr>
<br><img src = "koperasi.png"width="350" height="200">

</tr>

</table>
  <h1 class="w3-margin w3-jumbo"><marquee>Welcome to COOPMAS Stock</marquee></h1>
</header>

<center>



</center>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-60 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>VISI</h1>
      <h5 class="w3-padding-32">Menjadi institusi kecemerlangan TVET yang sejajar dengan keperluan industri.</h5>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-60 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
     
    </div>

    <div class="w3-twothird">
      <h1>MISI</h1>
      <h5 class="w3-padding-32"> Menyediakan akses kepada program TVET berkualiti dan diiktiraf bagi melahirkan modal insan yang holistik, berdaya keushawanan serta berdaya saing sejajar keperluan industri di peringkat global.</h5>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
 
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


</body>
</html>

