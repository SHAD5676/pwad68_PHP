<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_POST['search'])) {
        $stid = $_POST['student_id'];
        include("resultClass.php");

        $sheet = new student("result_sheet.txt");
        $sheet = $sheet->result($stid);
        echo $sheet;
    }
    ?>


    <h3>Find Result</h3>
    <form action="" method="post">
        <input type="number" name="student_id">
        <input type="submit" name="search" value="SEARCH">
    </form>

</body>

</html>