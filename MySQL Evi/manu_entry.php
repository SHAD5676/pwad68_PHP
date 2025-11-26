<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Manufacture Entry</h2>
    <form action="" method="post">
        Name:
        <input type="text" name="myname" placeholder="Enter your name"> <br><br>

        Address:
      <input type="text" name="address" id=""> <br><br>

       Contact No:
       <input type="number" name="number" placeholder="Enter number"> <br><br>

       <input type="submit" name="submit" value="CHECK">

    </form>



    <h2>Manufacturer List</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        <?php
        include_once("db_config.php");
        $sql = "SELECT * FROM manufacturer";
        $rawData = $db->query($sql);
        while($row = $rawData->fetch_assoc()):

        ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><a href="manufacturer_delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

        <?php endwhile; ?>

    </table>


    <?php
    if(isset($_POST["submit"])){
      extract($_POST);
      include_once("db_config.php");
      $sql = "INSERT INTO manufacturer VALUES (NULL, '$myname', '$address', '$number')";
      $db->query($sql);
if($db->affected_rows){
    echo "Manufacturer Added Successfully";
}
}


?>
</body>
</html>