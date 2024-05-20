<?php
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title><?php echo "About"?></title>

    <!-- CSS  -->
    <link rel="stylesheet" href="script/style.css" />

  </head>

  <body>
    
     <!------ HEADER ------->

     <section class="header">
      <nav>
     
        <img src="<?php echo $Logo; ?>" alt="logo" />
        <div class="nav-links" id="nav-links">
          <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

          <ul>
            <li><a href="main.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li class="logout"><a href="login.php">Log Out</a></li>      
          </ul>           
      </div>
    </section>


    <!---- content-->
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1><?php echo "About Us"?></h1>
                <p>
                <?php echo "
                  Welcome to Game World! We are a passionate team dedicated to creating engaging and innovative experiences for game enthusiasts around the world. Our mission is to blend creativity, technology, and storytelling to produce games that entertain, educate, and inspire.
                  
                  Game World is composed of visionary designers, talented developers, imaginative artists, and dedicated storytellers. Our collective mission is to create a game world that not only entertains but also inspires and connects players from all walks of life.
                  
                  We envision a world where games are more than just a pastime; they are a means of connecting people, sparking creativity, and fostering learning. We strive to push the boundaries of what games can achieve, exploring new frontiers in gameplay mechanics, narrative depth, and technological innovation. "?>
                </p>
                    <a href="main.php" class="hero-btn black-btn"><?php echo "EXPLORE NOW"?></a>
            </div>
            <div class="about-col">
                <img src="images/nana.png">
            </div>
        </div>

    </section>
    
  </body>
</html>
