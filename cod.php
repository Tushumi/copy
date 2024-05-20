<?php
$cod01 = "images/cod/cod01.png";
$cod02 = "images/cod/cod2.png";
$cod03 = "images/cod/cod3.png";
$cod04 = "images/cod/cod4.png";
$cod05 = "images/cod/cod5.png";
$cod06 = "images/cod/cod6.png";
$cod07 = "images/cod/cod7.png";
$cod08 = "images/cod/cod8.webp";
$cod09 = "images/cod/cod9.png";
$cod10 = "images/cod/cod10.png";
$cod11 = "images/cod/cod11.png";
$cod12 = "images/cod/cod12.png";
$cod13 = "images/cod/cod13.webp";
$cod14 = "images/cod/cod14.png";
$cod15 = "images/cod/cod15.png";
$Logo = "images/logo2.png";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Call of Duty</title>

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
            <li><a href="main copy.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li class="logout"><a href="login.php">Log Out</a></li>      
          </ul>
        </div>
      </nav>
      </section>
      <h1 style="text-align: center; padding-top: 40px">Call of Duty Characters</h1>
    </section>
      

    <!----- Lesson ----->
    <div class="gallery">
      <img src="<?php echo $cod01; ?>">
      <img src="<?php echo $cod02; ?>">
      <img src="<?php echo $cod03; ?>">
      <img src="<?php echo $cod04; ?>">
      <img src="<?php echo $cod05; ?>">
      <img src="<?php echo $cod06; ?>">
      <img src="<?php echo $cod07; ?>">
      <img src="<?php echo $cod08; ?>">
      <img src="<?php echo $cod09; ?>">
      <img src="<?php echo $cod10; ?>">
      <img src="<?php echo $cod11; ?>">
      <img src="<?php echo $cod12; ?>">
      <img src="<?php echo $cod13; ?>">
      <img src="<?php echo $cod14; ?>">
      <img src="<?php echo $cod15; ?>">
    </div>
  
  </body>
</html>