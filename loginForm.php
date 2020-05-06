<?php

session_start();

include "header.php";

$error = "";

$accounts = array(
    'admin' => 'password',
    'customer' => 'password1'
);


if (isset($_POST['submit_button'])) {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        
        if (!isset($accounts[$username]) or $accounts[$username] != $password) {
            $error = "Invalid Username or Password";
            $_SESSION['LoggedIn'] = 'FALSE';
        } else {
            $error = "";
            $_SESSION['LoggedIn'] = 'TRUE';
            $_SESSION['username'] = $username;

            if (isset($_POST['remember_me'])) {
                setcookie('user_login', 
                $username);
            }
            //redirect to private page
            header("Location: login.php");
            exit();
            // }


            // if ($username == "admin") {
            //     if ($password == "password") {
            //         $error = "";
            //         $success = "Welcome $username!";
            //         $_SESSION['username'] = $username;
            //         //redirect to private page
            //         header("Location: login.php");
            //         exit();
        } 
        // } else {
        //     $error = "Invalid Username";
        //     $success = "";
    
}


?>

<div class="container-fluid">
    <div class="panel-heading">
        <h2>Login</h2>
    </div>
</div>
<div class="container-fluid">
    <p class="error">
        <?php
        echo $error;
        ?>
    </p>
</div>
<div class="container-fluid">
    <div class="panel-body">
        <form class="form-horizontal" method="post">

            <div class="form-group">
                <label class="control-label col-sm-2" for="uname"><b>Username</b></label>
                <input type="text" value="" placeholder="Enter Username" name="username" required>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="psw"><b>Password</b></label>
                <input type="password" value="" placeholder="Enter Password" name="password" required>
            </div>

            <div class="form-group">
                <input type="checkbox" checked="checked" name="remember_me">
                <label class="control-label col-sm-2"> Remember me</label>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input class="btn btn-default" type="submit" name="submit_button" id="submitButton" value="LOGIN" />
                </div>

            </div>

            <div class="container">
                <span class="psw"><a href="accountRecoveryForm.php">Forgot password?</a></span>
            </div>
        </form>
    </div>
</div>

<?php include "footer.php"; ?>