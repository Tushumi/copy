<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        $error = "Passwords do not match!";
    } else {
        $xmlFilePath = 'Otida_BSIT2G.xml';

        if (file_exists($xmlFilePath)) {
            $xml = simplexml_load_file($xmlFilePath);

            foreach ($xml->user as $user) {
                if ($user->username == $username) {
                    $error = "Username already exists!";
                    break;
                }
            }
        } else {
            $xml = new SimpleXMLElement('<users></users>');
        }

        if (empty($error)) {
            $user = $xml->addChild('user');
            $user->addChild('username', $username);
            $user->addChild('password', $password);

            $xml->asXML($xmlFilePath);

            echo "<script>window.location.href = 'login.php';</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title><?php echo "Register"?></title>
 
    <link rel="stylesheet" href="script/login.css">
</head>

<body>
    <div class="container">
       
        <div class="login">
            <h3 class="title"><?php echo "Create account"?></h3>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="confirm_password" placeholder="Confirm Password">
            </div>
            <?php if (!empty($error)): ?>
                    <p class="error" style="color: red; font-size: 10px;"><?php echo $error; ?></p>
                <?php endif; ?>
            <button type="submit" class="login-btn"><?php echo "REGISTER"?></button>
            
            <div class="create">            
            Already have an account?
                <a href="login.php"><?php echo "Login"?></a>
            </div>
        </div>
    </div>
</body>

</html>