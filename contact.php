<?php
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=[device-width], initial-scale=1.0" />
    <title>One Piece</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="script/style.css" />

    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"
    ></script>
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

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5><?php echo "LOCATION"?></h5>
                        <p><?php echo "Bognuyan, Gasan, Manduque"?></p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5><?php echo "+639150181158"?></h5>
                        <p><?php echo "Everyday, 7AM - &PM"?></p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5><?php echo "gameworld001@gmail.com"?></h5>
                        <p><?php echo "Email us in your query"?></p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="">
                    <input type="Email" placeholder="Enter email address" required>
                    <textarea rows="8" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn black-btn" onclick="openPopup()">Send Message</button>
                </form>          
            </div>
        </div>
        <div class="popup" id="popup">
              <h2>Thank You</h2>
              <p>Your detail has been submited</p>
              <button type="button"onclick="closePopup()">OK</button>
            </div>       
    </section>

<script>
  let popup = document.getElementById("popup");
  function openPopup(){
    popup.classList.add("open-popup")
  }
  function closePopup(){
    popup.classList.remove("open-popup")
  }
</script>
   

<script src="index.js"></script>
  
</body>
</html>
