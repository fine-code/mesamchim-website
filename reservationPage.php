<?php include "header.php"; ?>

<!DOCTYPE html>



<head>
    <title>Wedding Shtick Reservation Form</title>
    <meta charset="UTF-8">
    <LINK rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
    
    <h1>Reservation Request Form</h1>
    
    <form action="reservation.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" size="100"/>
        <br>
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
        <br>
        <label for=""email">Email</label>
        <input type="email" id ="email" name="email" size="100"/>
        <br>
        <label for="eventType">Event Type</label>
        <select name="eventType[]" id="eventType">
            <option>Wedding</option>
            <option>Bat Mitzvah</option>
            <option>Party</option>
            <option>Play</option>
            <option>Other</option>
        </select>
        <br>
        <label for="eventDate">Event Date</label>
        <input type="date" id="eventDate" name="eventDate"/>
        <br>
        <label for="comments">Comments</label>
        <input type="textarea" id="comments" name="comments" size="100"/>
        <br>
        <input type="submit" name="submit_button" id="submitButton" value="Submit" />
    </form>
    
</body>

</html>

<?php include "footer.php"; ?>
