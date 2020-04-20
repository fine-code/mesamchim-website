<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="panel-heading">
        <h2>Reservation Request Form</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="panel-body">
        <form class="form-horizontal" action="reservation.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name</label>
                <div class="col-sm-10">
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone">Phone Number</label>
                <div class="col-sm-10">
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" name="email"></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="eventType">Event Type</label>
                <div class="col-sm-10">
                    <select name="eventType[]" id="eventType">
                        <option>Wedding</option>
                        <option>Bat Mitzvah</option>
                        <option>Party</option>
                        <option>Play</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="eventDate">Event Date</label>
                <div class="col-sm-10">
                    <input type="date" id="eventDate" name="eventDate"></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="comments">Comments</label>
                <div class="col-sm-10">
                    <input type="textarea" id="comments" name="comments" /></div>
            </div>
            <div class="form-group">
            </div>
            <div class="col-sm-offset-2 col-sm-10">
                <input class="btn btn-default" type="submit" name="submit_button" id="submitButton" value="Submit" />
            </div>
        </form>
    </div>
</div>

</body>

</html>
<?php include "footer.php"; ?>