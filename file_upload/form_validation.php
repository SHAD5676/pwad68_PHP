<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

<h2>Form Validation</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <br>
    <input type="text" name="fullname" placeholder="Enter your name"> <br><br>

    Email Address: <br>
    <input type="email" name="email" placeholder="Enter email"> <br><br>

    Skills: <br>
    <select name="skills[]" multiple>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="js">JS</option>
        <option value="python">Python</option>
    </select> <br><br>

    Languages: <br>
    <input type="checkbox" name="languages[]" value="html">HTML
    <input type="checkbox" name="languages[]" value="php">PHP
    <input type="checkbox" name="languages[]" value="c#">C#
    <input type="checkbox" name="languages[]" value="css">CSS <br><br>

    <button type="submit" name="submit">SUBMIT</button>
</form>

<?php
if (isset($_REQUEST['submit'])) {
    $skills_output = "";
    $langs_output = "";
    $errors = array();

    // Name
    $name = $_REQUEST['fullname'];

    // Email Validation
    if (empty($_REQUEST['email'])) {
        $errors[] = "You must enter email";
    } else {
        $email = $_REQUEST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email is not valid";
        }
    }

    // Skills Validation
    if (empty($_REQUEST['skills'])) {
        $errors[] = "You must select at least one skill";
    } else {
        $skills = $_REQUEST['skills'];
        foreach ($skills as $skill) {
            $skills_output .= $skill . ", ";
        }
    }

    // Languages Validation
    if (empty($_REQUEST['languages'])) {
        $errors[] = "You must select at least one language";
    } else {
        $langs = $_REQUEST['languages'];
        foreach ($langs as $lang) {
            $langs_output .= $lang . ", ";
        }
    }

    // Show Errors or Table
    if (count($errors) > 0) {
        echo "<ul style='color:red;'>";
        foreach ($errors as $err) {
            echo "<li>" . $err . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Submitted Data:</h3>";
        echo "<table>
                <tr><td>Name:</td><td>$name</td></tr>
                <tr><td>Email:</td><td>$email</td></tr>
                <tr><td>Skills:</td><td>$skills_output</td></tr>
                <tr><td>Languages:</td><td>$langs_output</td></tr>
              </table>";
    }
}
?>

</body>
</html>
