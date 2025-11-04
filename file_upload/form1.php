<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">
        Name: <br>
        <input type="text" name="fullname" placeholder="Enter your name"> <br>

        Email Address: <br>
        <input type="email" name="email" placeholder="Enter email"> <br>

        Skills: <br>
        <select name="skills[]" id="" multiple="multople">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="js">JS</option>
            <option value="python">Python</option>
        </select> <br>


        Languages: <br>
        <input type="checkbox" name="languages[]" value="html">HTML
        <input type="checkbox" name="languages[]" value="php">PHP
        <input type="checkbox" name="languages[]" value="c#">C#
        <input type="checkbox" name="languages[]" value="css">CSS <br>

        <button type="submit" name="submit">SUBMIT</button>

        <?php
        if (isset($_REQUEST['submit'])) {
            $name = $_REQUEST["fullname"];
            $email = $_REQUEST["email"];
            $skills = $_REQUEST["skills"];
            $langs = $_REQUEST["languages"];

            $skills_output = "";
            $langs_output = "";

            foreach ($skills as $skill) {
                $skills_output .= $skill . ",";
            }

            foreach ($langs as $lang) {
                $langs_output .= $lang . ",";
            }


            // echo "<pre>";
            // print_r($_REQUEST);
            // echo "SKILLS:";
            // print_r($_REQUEST['skills']);
            // echo "want to learn:";
            // print_r($_REQUEST['languages']);
         ?>

         <table>
            <tr>
                <td>Name:</td>
                <td><?php echo $name; ?></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><?php echo $email; ?></td>
            </tr>

            <tr>
                <td>Languages:</td>
                <td><?php echo $langs_output; ?></td>
            </tr>

            <tr>
                <td>Skils:</td>
                <td><?php echo $skills_output; ?></td>
            </tr>
        </table>


        <?php
        }
        ?>
      

        
    </form>
</body>

</html>