<?php
include('db.php');
include('function.php');
updateTable();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
    <form action="" method="post">
        Name : <input type="text" name='name'><br>
        Password : <input type="text" name="password" id=""><br>

        <select name="id" id="">
            
               
               
                <?php 
                
                readTable();
                ?>
               
           
        </select>
        <input type="submit" name='submit' value='update'>
    </form>
</body>
</html>