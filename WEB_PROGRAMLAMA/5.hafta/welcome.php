<?php

$username = $_POST['username'];
$email = $_POST['email'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo  "KUllanıcı adı : ".$username."<br>  "." <br> E-posta :". $email;
?>
    
</body>
</html>