<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
</head>

<body>

    <h1> Forum Registratie</h1>
    <form action="registratie_handler.php" method="POST">
        <label>
            <input type="text" placeholder="Username...." name="username"> Username
        </label>

        <label>
            <input type="text" placeholder="Email...." name="email"> Email
        </label>

        <label>
            <input type="text" placeholder="Age....." name="age"> Age
        </label>

        <label>
            <input type="submit" value="Submit">
        </label>

    </form>
</body>

</html>

<?php
