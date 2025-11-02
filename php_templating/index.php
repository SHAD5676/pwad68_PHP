<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>

<!--Menubar-->
   
<?php include ("include/navbar.php"); ?>

<!--Content-->
    <div style="width: 950px; height:400px; background-color:aquamarine  ">
        <h1 style="color: red;" class="home <?php if($a=='/pwad 68/php_templating/index.php') echo 'active';?>" >Home Page</h1>
        
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam libero veniam voluptas doloremque at voluptates perspiciatis corrupti quam. Fugit consectetur dolore accusamus facere autem fugiat voluptatibus quaerat quae cupiditate perferendis.</p>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam libero veniam voluptas doloremque at voluptates perspiciatis corrupti quam. Fugit consectetur dolore accusamus facere autem fugiat voluptatibus quaerat quae cupiditate perferendis.</p>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam libero veniam voluptas doloremque at voluptates perspiciatis corrupti quam. Fugit consectetur dolore accusamus facere autem fugiat voluptatibus quaerat quae cupiditate perferendis.</p>
    </div>
    
<!-- Footer-->
<?php include "include/footer.php" ?>
</body>

</html>