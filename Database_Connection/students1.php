<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<?php

$sql = "SELECT * FROM students1 ORDER BY employeeID desc";
$result = $db->query($sql);
/*while ($row = $result->fetch_obj()) {
    echo $row->employeeId;
    echo $row->first_name;
    echo $row->last_name;
    echo "<hr>";
}; */

//echo $row['employeeId'];
//echo $row['first_name'];




?>

<body>

    <table>

        <tr>
            <th>ID</th>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Birth Date</td>
        </tr>
        <?php
        while ($row = $result->fetch_object()){;
        ?>

        <tr>
            <td><?php echo $row->employeeID; ?></td>
            <td><?php echo $row->first_name; ?></td>
            <td><?php echo $row->last_name; ?></td>
            <td><?php echo $row->birthdate; ?></td>
        </tr>
        <?php } ?>
    </table>
     <a href="student_entry.php">Student Entry</a>

</body>

</html>