<?php
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Game World</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="./script/style.css" />

   
  </head>

  <body>
    
    <!------ HEADER ------->

    <section class="header">
      <nav>
     
      <img src="<?php echo $Logo; ?>" alt="logo" />
        <div class="nav-links" id="nav-links">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li class="logout"><a href="login.php">Log Out</a></li>      
          </ul>           
      </div>
    </section>

<!---categories section-->
    
<div class="cat-row">
            <div class="cat-header">
                 <h2>Game Categories</h2>
                 <p>Games play a significant role in human culture, offering a wide range of experiences that cater <br>to different interests and age groups,the common purpose of providing a structured activity for players to engage in.</p>
            </div>

            <div class="cat-books">
                <div class="books">
                    <div class="book-image">
                        <img src="./images/ml-logo.webp" alt="">
                    </div>
                    <h4>Mobile Legends</h4>
                    <p>Mobile Legends is a popular multiplayer online battle arena (MOBA) game for mobile devices.</p>
                </div>
              
                <div class="books">
                    <div class="book-image">
                        <img src="./images/codm1.png" alt="">
                    </div>
                    <h4>Call of Duty</h4>
                    <p>Call of Duty franchise has maintained its popularity by consistently evolving its gameplay.</p>
                </div>
                <div class="books">
                    <div class="book-image">
                        <img src="./images/gi-logo.png" alt="">
                    </div>
                    <h4>Genshin Impact</h4>
                    <p> Genshin Impact has garnered widespread acclaim for its high production values.</p>
                </div>
                <div class="books">
                    <div class="book-image">
                        <img src="./images/coc-logo2.png" alt="">
                    </div>
                    <h4>Clash of Clans</h4>
                    <p>Clash of Clans is a widely popular mobile strategy game developed by Supercell.</p>
                </div>
                <div class="books">
                    <div class="book-image">
                        <img src="./images/sw1-logo.png" alt="">
                    </div>
                    <h4>Subway Surfers</h4>
                    <p>Subway Surfers remains a favorite in the endless runner.</p>
                </div>
           
            </div>
        </div>
   
          <!---- About ---->
    <div class="about">
        <div class="about-image">
            <img src="./images/ling01.png" alt="">
        </div>
        <div class="about-tag">
            <h1>About Our Game World</h1>
            <p>Welcome to the journey of bringing our game world to life a realm where imagination meets reality, and where players will embark on unforgettable adventures. Here’s a vision for our game world, designed to inspire and motivate us as we build this extraordinary universe together.</p>
           
        </div>
    </div>

     <!--- books --->
     <div class="featured-books">
        <h1>Game World</h1>

        <div class="featured-book-box">
            <div class="featured-book-card">
                <div class="featured-book-img">
                    <img src="./images/ml-logo.webp" alt="">
                </div>

                <div class="featured-book-tag">
                    <h2 class="writer">Mobile Legends</h2>
                    <a href="ml.php"class="f-btn">Explore</a>
                </div>
            </div>

            <div class="featured-book-card">
                <div class="featured-book-img">
                    <img src="./images/codm1.png" alt="">
                </div>

                <div class="featured-book-tag">
                    <h2 class="writer">Call of Duty</h2>
                    <a href="cod.php" class="f-btn">Explore</a>
                </div>
            </div>

            <div class="featured-book-card">
                <div class="featured-book-img">
                    <img src="./images/gi-logo.png" alt="">
                </div>

                <div class="featured-book-tag">
                    <h2 class="writer">Genshin</h2>
                    <a href="genshin.php" class="f-btn">Explore</a>
                </div>
            </div>

            <div class="featured-book-card">
                <div class="featured-book-img">
                    <img src="./images/coc-logo2.png" alt="">
                </div>

                <div class="featured-book-tag">
                    <h2 class="writer">Clash of Clans</h2>
                  
                    <a href="coc.php" class="f-btn">Explore</a>
                </div>
            </div>

            <div class="featured-book-card">
                <div class="featured-book-img">
                    <img src="./images/sw1-logo.png" alt="">
                </div>

                <div class="featured-book-tag">
                    <h2 class="writer">Subway Surfers</h2>
                   
                    <a href="sw.php" class="f-btn">Explore</a>
                </div>         
              </div>  
        </div>   
        
        <div class="img-footer">
          <img src="./images/gi-bn.png" width="200px">
          <img src="./images/bn1.png" width="150px">
          <img src="./images/bn2.png" width="120px">
          <img src="./images/bn3.png" width="200px">
          <img src="./images/bn4.png" width="130px">
          <img src="./images/bn5.png" width="190px">
          <img src="./images/bn6.png" width="160px">
          <img src="./images/bn7.png" width="150px">
        </div>       
  </body>
</html>