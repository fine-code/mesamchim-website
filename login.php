<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="panel-heading">
        <h2>Login</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="panel-body">
        <form class="form-horizontal" action="action_page.php" method="post">
            <!--   <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->

            <div class="container">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-default" type="submit" name="submit_button" id="submitButton" value="Log In" />
                    </div>

                </div>
            </div>

            <div class="container">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
</div>

<?php

//save the cookie if the Remember Me checkbox is checked

?>

<?php include "footer.php"; ?>