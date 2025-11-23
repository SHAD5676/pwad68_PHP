<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Result</h2>
    <form action="" method="$_POST">
        id: <br>
        <input type="text" name="stu_id" id=""> <br><br>
        <input type="submit" name="search" value="SEARCH"><br><br>
    </form>

    <?php
    if(isset($_REQUEST["search"])){
        $stu_id = $_REQUEST["stu_id"];

        include("resultclass.php");
        $i = new std("resultsheet.txt");
    }

?>

</body>
</html>