<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handler</title>
</head>

<body>

    <h1> Forum Registratie</h1>
    <?php
    foreach ($_POST['username'] as $username) {
        echo 'Jouw username is ' . $username . '<br>';
        foreach ($_POST['email'] as $email) {
            echo 'Jouw email is ' . $email . '<br>';
            foreach ($_POST['age'] as $age) {
                echo 'Jouw age is ' . $age . ' <br>';
            }
        }
    }
    ?>

</body>

</html>