<?php include "header.php"; ?>
<?php

    session_start();

    if ($_SESSION['LoggedIn']) {
            echo "Hello, " . $_SESSION['username']. "!<br>";
            echo "Welcome to your personalized page on mesamchim.com!";
    }
    else {
        echo "Unable to find your account";
        echo '<button onclick="loginForm.php" class="btn btn-default" type="login" name="login_button" id="loginButton" value="LOGIN" />';
    }
    

    
?>
<?php include "footer.php"; ?>
