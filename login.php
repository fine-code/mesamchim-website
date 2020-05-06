<?php include "header.php"; ?>
<?php

    session_start();
    
    if (isset($_SESSION['username'])) {
            echo "Hello, " . $_SESSION['username']. "!<br>";
            echo "Welcome to your personalized page on mesamchim.com!";
    }
    else {
        echo "Unable to find your account";
    }

    
?>
<?php include "footer.php"; ?>
