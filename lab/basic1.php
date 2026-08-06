<!-- <!DOCTYPE html>
<html>
<body>
 <h1>My First PHP Page</h1>
 <?php
 echo "Hello, students! Welcome to PHP.";
 ?>
</body>
</html>
 -->
 
 
<?php
$length = 20;
$width = 8;
 
$area = $length * $width;
$perimeter = 2 * ($length * $width);
 
echo "Length= $length <br>";
echo "Width= $width <br>";
echo "Area= $area <br>";
echo "Perimeter=$perimeter <br>";
 
$amount = 0.1;
$vat = $amount * 0.15;
echo "Amount = $amount <br>";
echo "VAT =$vat<br>";
 
$number = 12;
 
if ($number % 2 == 0) {
    echo "$number is Even";
} else {
    echo "$number is Odd";
}
$num1 = 20;
$num2 = 60;
$num3 = 40;
 
if ($num1 >= $num2 && $num1 >= $num3) {
    $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest = $num2;
} else {
    $largest = $num3;
}
 
echo "The largest number is= $largest <br>";
 
$oddTotal = 0;
$evenTotal = 0;
 
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
 
        $evenTotal += $i;
    } else {
 
        $oddTotal += $i;
    }
}
 
 
echo "Total of Even Numbers (1 to 100)= $evenTotal<br>";
echo "Total of Odd Numbers (1 to 100)= $oddTotal <br>";
 
$array = array(20,30,40,50,60);
$search = 40;
$found = false;
 
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $search) {
        $found = true;
        break;
    }
}
 
if ($found) {
    echo "$search Found in the Array.<br>";
} else {
    echo "$search Not Found.<br>";
}
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
$ch = 'A';
 
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
?>
 