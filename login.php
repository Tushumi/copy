<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validateUser($username, $password)) {
        echo "<script>window.location.href = 'main.php';</script>";
    } else {
        $errorMessage = "Invalid username or password!";
    }
}

function validateUser($username, $password)
{
    $xml = simplexml_load_file('Otida_BSIT2G.xml');
    
    foreach ($xml->user as $user) {
        if ($user->username == $username && $user->password == $password) {
            return true;
        }
    }
    
    return false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <title><?php echo "Login"?></title>
   
    <link rel="stylesheet" href="script/login.css">
</head>

<body>
    <div class="container">
        
       
        <div class="login">
            <h3 class="title"><?php echo "User Login "?></h3>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="text" name="username" 
                placeholder="Username"> <span></span>
            </div>

            <?php if (isset($usernameError)): ?>
                <p class="error"><?php echo $usernameError; ?></p>
            <?php endif; ?>

            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="password" placeholder="Password"> 
            </div>

            <?php if (isset($passwordError)): ?>
                <p class="error"><?php echo $passwordError; ?></p>
            <?php endif; ?>

            <?php if (isset($errorMessage)): ?>
                <div class="error-container" style="color: red; font-size: 10px;">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>

            <button type="submit" class="login-btn"><?php echo "LOGIN"?></button>
            <div class="create">
                <a href="register.php"><?php echo "Create Your Account"?></a>
                <i class="ri-arrow-right-fill"></i>
            </div>
        </div>
    </div>
</body>

</html>