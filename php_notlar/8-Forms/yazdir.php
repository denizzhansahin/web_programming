<?php
//bir parametre için
//yazdir.php?q=aspnet
//iki parametre için
//yazdir.php?q=aspnet&category=programlama

$query = $_GET['q'];
$category = $_GET['category'];
echo $query;
echo "<br>";
echo $category;



?>