<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Record</title>
</head>

<body>

    <?php

    include_once("config.php");
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $age = mysqli_real_escape_string($mysqli, $_POST['age']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);


        //for checking empty field using php

        if (empty($name) || empty($age) || empty($email)) {
            if (empty($name)) {
                echo "<font color = 'red'> Name Field is empty </font> <br/> ";
            };
            if (empty($age)) {
                echo "<font color = 'red'> Age Field is empty </font> <br/> ";
            };
            if (empty($email)) {
                echo "<font color = 'red'> Email Field is empty </font> <br/> ";
            };

            //link to the previous page using php
            echo "<br/><a href='javascript:self.history.back():'>GO BACK </a>";
        } else {
            $result = mysqli_query($mysqli, "INSERT INTO  students(name, age, email) VALUES('$name', '$age', '$email')");

            //display success

            echo "<font color='green'> Data added successfully</font>";
            echo "<br/><a href='index.php'>View Result</a>";
        }
    }

    ?>



</body>

</html>