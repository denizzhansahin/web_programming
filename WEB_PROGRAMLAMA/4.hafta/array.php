

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>


<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>


<?php

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>





<?php
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
?>


<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
?>




    
<?php
$colors = array("red", "green", "blue", "yellow");
$colors1 = array("kırmızı", "yeşil", "mavi", "sarı");

$cars = ["Volvo","BMW","Fiat","Ford"];

echo $colors;
echo $colors1;

$x = 0;
foreach ($colors as $value) {



    echo "<div class=\"container my-3\">
    <div class=\"card mb3\">
        <div class=\"row\">
            <div class=\"col-3\">
                <img src=\"11.png\" alt=\"\" class=\"img-fluid rounded-star\">
            </div>
            <div class=\"col-9\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$value</h5>
                    <p class=\"card-text\">$colors1[$x]
                    <p class=\"card-text\">$cars[$x]
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>";

}
?>








<?php
$cars = array (
    array("Volvo",22,18,15,16),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15),
    array("Land Rover",17,15,15,15,15,15,15,15),
    array("Saab",17,15)
  );



$x = 0;
foreach ($cars as $value) {

    $x = 0;
    foreach($value as $deger){
        echo $deger;
        echo "<br>";

        
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    

?>
    <?php
    /*
    echo "<div class=\"container my-3\">
    <div class=\"card mb3\">
        <div class=\"row\">
            <div class=\"col-3\">
                <img src=\"11.png\" alt=\"\" class=\"img-fluid rounded-star\">
            </div>
            <div class=\"col-9\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Name : $value[0]</h5>
                    <p class=\"card-text\">Stocak :$value[1]
                    <p class=\"card-text\">Satılan :$value[2]
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>";
    */

}
?>








</body>
</html>
