<?php
$banner = "images/gi/banner.png";
$gi01 = "images/gi/gi1.png";
$gi02 = "images/gi/gi2.png";
$gi03 = "images/gi/gi3.png";
$gi04 = "images/gi/gi4.png";
$gi05 = "images/gi/g15.png";
$gi06 = "images/gi/g16.png";
$gi07 = "images/gi/gi7.png";
$gi08 = "images/gi/gi8.png";
$gi09 = "images/gi/gi9.png";
$gi10 = "images/gi/gi10.webp";
$gi11 = "images/gi/gi11.png";
$gi12 = "images/gi/gi12.png";
$gi13 = "images/gi/gi13.png";
$gi14 = "images/gi/gi14.png";
$gi15 = "images/gi/gi15.png";
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Genshin Impact</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="script/style.css" /> 
  </head>

  <body>
   <!------ HEADER ------->

   <section class="header">
      <nav>
     
        <img src="<?php echo $Logo; ?>" alt="logo" />
        <div class="nav-links" id="nav-links">
          <ul>
            <li><a href="main.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li class="logout"><a href="login.php">Log Out</a></li>      
          </ul>
        </div>
      </nav>
      </section>
      <h1 style="text-align: center; padding-top: 40px">Genshin Impact</h1>
    </section>

    <!----- Lesson ----->
    <div class="gallery">
      <img src="<?php echo $gi01; ?>">
      <img src="<?php echo $gi02; ?>">
      <img src="<?php echo $gi03; ?>">
      <img src="<?php echo $gi04; ?>">
      <img src="<?php echo $gi05; ?>">
      <img src="<?php echo $gi06; ?>">
      <img src="<?php echo $gi07; ?>">
      <img src="<?php echo $gi08; ?>">
      <img src="<?php echo $gi09; ?>">
      <img src="<?php echo $gi10; ?>">
      <img src="<?php echo $gi11; ?>">
      <img src="<?php echo $gi12; ?>">
      <img src="<?php echo $gi13; ?>">
      <img src="<?php echo $gi14; ?>">
      <img src="<?php echo $gi15; ?>">
    </div>
   
  </body>
</html>