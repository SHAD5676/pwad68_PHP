<?php
$id = $_GET['id'];
$sql = "DELETE FROM students1 WHERE `students1`.`employeeID` = '$id'";


include_once("db_config.php");

$db->query($sql);
header("Location:index.php");
?>