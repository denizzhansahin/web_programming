<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>

<?php
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>


<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

<?php 
function sum(int $x = 5, int $y=8) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo  sum() ."<br>";
echo  sum(1,1) ."<br>";

?>