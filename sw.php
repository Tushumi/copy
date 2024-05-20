<?php

$sw01 = "images/sw/sw1.png";
$sw02 = "images/sw/sw2.webp";
$sw03 = "images/sw/sw3.webp";
$sw04 = "images/sw/sw4.webp";
$sw05 = "images/sw/sw5.webp";
$sw06 = "images/sw/sw6.webp";
$sw07 = "images/sw/sw7.webp";
$sw08 = "images/sw/sw8.webp";
$sw09 = "images/sw/sw9.webp";
$sw10 = "images/sw/sw10.webp";
$sw11 = "images/sw/sw11.png";
$sw12 = "images/sw/sw12.png";
$sw13 = "images/sw/sw13.png";
$sw14 = "images/sw/sw14.png";
$sw15 = "images/sw/sw15.webp";
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Subway Surfers</title>

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
      <h1 style="text-align: center; padding-top: 40px">Bleach Photo gallery</h1>
    </section>

    <!----- Lesson ----->
    <div class="gallery">
      <img src="<?php echo $sw01; ?>">
      <img src="<?php echo $sw02; ?>">
      <img src="<?php echo $sw03; ?>">
      <img src="<?php echo $sw04; ?>">
      <img src="<?php echo $sw05; ?>">
      <img src="<?php echo $sw06; ?>">
      <img src="<?php echo $sw07; ?>">
      <img src="<?php echo $sw08; ?>">
      <img src="<?php echo $sw09; ?>">
      <img src="<?php echo $sw10; ?>">
      <img src="<?php echo $sw11; ?>">
      <img src="<?php echo $sw12; ?>">
      <img src="<?php echo $sw13; ?>">
      <img src="<?php echo $sw14; ?>">
      <img src="<?php echo $sw15; ?>">
    </div>
   
  </body>
</html>