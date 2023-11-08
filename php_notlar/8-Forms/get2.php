<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if($_GET){
    $query = $_GET['q'];
    $category = $_GET['category'];
    echo $query;
    echo "<br>";
    echo $category;
    
}

/*

 <form action="get2.php" method="GET">
        <input type="text" name="q">
        <input type="text" name="category">
        <button type="submit">Gönder</button>
    </form>

*/

?>
    <form  method="GET">
        <input type="text" name="q">
        <input type="text" name="category">
        <button type="submit">Gönder</button>
    </form>

   
</body>
</html>