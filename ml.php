<?php
$ml01 = "images/ml/martis.png";
$ml02 = "images/ml/nana.png";
$ml03 = "images/ml/harith.png";
$ml04 = "images/ml/xavier.png";
$ml05 = "images/ml/gusion.png";
$ml06 = "images/ml/karina.png";
$ml07 = "images/ml/layla.png";
$ml08 = "images/ml/harith.png";
$ml09 = "images/ml/julian.png";
$ml10 = "images/ml/cyclopes.png";
$ml11 = "images/ml/gord.png";
$ml12 = "images/ml/hanabi.png";
$ml13 = "images/ml/fanny.png";
$ml14 = "images/ml/xb.png";
$ml15 = "images/ml/yuzhong.png";
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mobile Legends</title>

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
      <h1 style="text-align: center; padding-top: 40px">Mobile Legends Characters</h1>
    </section>

    <!----- Lesson ----->
    <div class="gallery">
      <img src="<?php echo $ml01; ?>">
      <img src="<?php echo $ml02; ?>">
      <img src="<?php echo $ml03; ?>">
      <img src="<?php echo $ml04; ?>">
      <img src="<?php echo $ml05; ?>">
      <img src="<?php echo $ml06; ?>">
      <img src="<?php echo $ml07; ?>">
      <img src="<?php echo $ml08; ?>">
      <img src="<?php echo $ml09; ?>">
      <img src="<?php echo $ml10; ?>">
      <img src="<?php echo $ml11; ?>">
      <img src="<?php echo $ml12; ?>">
      <img src="<?php echo $ml13; ?>">
      <img src="<?php echo $ml14; ?>">
      <img src="<?php echo $ml15; ?>">
    </div>
  
  </body>
</html>