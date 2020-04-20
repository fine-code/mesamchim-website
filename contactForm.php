<?php include "header.php"; ?>
<div class="container-fluid">
    <div class="panel-heading">
        <h2>Contact Us</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="panel-body">
        <div class="panel-body">
            <p>Give us a call, send us a message, or use the form below to discover more about our unique wedding shtick!</p>
            <p><b>Call/Text/Whatsapp:</b> (347) 407-1964</p>
            <p><b>Email:</b> <a href:"mailto:info@mesamchim.com">info@mesamchim.com</a></p>
        </div>
        <form class="form-horizontal" action="contactForm.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name</label>
                <div class="col-sm-10">
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone">Phone Number</label>
                <div class="col-sm-10">
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="message">Message</label>
                <div class="col-sm-10">
                    <input type="textarea" id="message" name="message">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit_button" id="submitButton" value="Send">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "footer.php"; ?>