<?php

if(!empty($_POST)){
    $username = $_GET['username'];
    $password = $_POST['password'];

    echo $username." ".$password;
}



/*
 <form action="yazdir2.php" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <button type="submit">Login</button>
    </form>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>