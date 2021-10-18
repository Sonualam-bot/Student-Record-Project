<?php

include_once('config.php');

$result = mysqli_query($mysqli,  "SELECT * FROM students ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Home Page</title>
</head>

<center>
    <h1><u>Students Details Table</u></h1>
    <br>
    <a href="register.html">Add New Student Record</a>
</center>
<br>
<table id="studenttable">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php

    while ($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $res['name'] . "</td>";
        echo "<td>" . $res['age'] . "</td>";
        echo "<td>" . $res['email'] . "</td>";

        echo "<td><a href=\"edit.php?id=$res[id]\"> EDIT</a> <a href=\delete.php?id=$res[id]\" onClick=\"return confirm ('Are you sure you want to delete ?')\"> DELETE </a> </td>";
    }

    ?>



</table>

<body>

</body>

</html>