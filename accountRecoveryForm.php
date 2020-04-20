<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="panel-heading">
        <h2>Recover Your Password</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="panel-body">
        <form class="form-horizontal" action="action_page.php" method="post">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter email" name="email" required>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-default" type="submit" name="submit_button" id="submitButton" value="Enter" />
                    </div>
                </div>
        </form>
    </div>
</div>

<?php include "footer.php"; ?>