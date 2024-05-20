<?php
$coc01 = "images/coc/coc1.png";
$coc02 = "images/coc/coc2.png";
$coc03 = "images/coc/coc3.webp";
$coc04 = "images/coc/coc4.webp";
$coc05 = "images/coc/coc5.webp";
$coc06 = "images/coc/coc6.png";
$coc07 = "images/coc/coc7.png";
$coc08 = "images/coc/coc8.png";
$coc09 = "images/coc/coc9.png";
$coc10 = "images/coc/coc10.webp";
$coc11 = "images/coc/coc11.png";
$coc12 = "images/coc/coc12.png";
$coc13 = "images/coc/coc13.png";
$coc14 = "images/coc/coc14.png";
$coc15 = "images/coc/coc15.png";
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Clash of Clans</title>

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
      <h1 style="text-align: center; padding-top: 40px">Clash of Clans Troops</h1>
    </section>

    <!----- Lesson ----->
    <div class="gallery">
      <img src="<?php echo $coc01; ?>">
      <img src="<?php echo $coc02; ?>">
      <img src="<?php echo $coc03; ?>">
      <img src="<?php echo $coc04; ?>">
      <img src="<?php echo $coc05; ?>">
      <img src="<?php echo $coc06; ?>">
      <img src="<?php echo $coc07; ?>">
      <img src="<?php echo $coc08; ?>">
      <img src="<?php echo $coc09; ?>">
      <img src="<?php echo $coc10; ?>">
      <img src="<?php echo $coc11; ?>">
      <img src="<?php echo $coc12; ?>">
      <img src="<?php echo $coc13; ?>">
      <img src="<?php echo $coc14; ?>">
      <img src="<?php echo $coc15; ?>">
    </div>
   
  </body>
</html>