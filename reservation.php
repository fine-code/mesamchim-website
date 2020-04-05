<?php include "header.php"; ?>
<?php

    echo "" . $_POST['name'] . ", thank you for your reservation request!<br>";
    echo "We will check the availablity of our " . implode($_POST['eventType']) . " package on " . $_POST['eventDate'];
    echo " and contact you at " . $_POST['phone'] . " and " . $_POST['email'] . "<br>";
    
?>
<?php include "footer.php"; ?>
