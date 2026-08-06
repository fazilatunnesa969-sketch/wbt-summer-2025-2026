<?php
 
$principal = 1000;
$rate = 5;
$time = 2;
$simpleInterest = ($principal * $rate * $time) / 100;
 
echo "Principal Amount = $principal <br>";
echo "Rate = $rate % <br>";
echo "Time = $time years <br>";
echo "Simple Interest = $simpleInterest<br>";
 
$num = 17;
$isPrime = true;
if($num <= 1){
    $isPrime = false;
}
else{
    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            $isPrime = false;
            break ;
        }
    }
}
if($isPrime){
    echo"$num = is a Prime number<br>";
}
else{
    echo"$num = is not a Prime number<br>";
}
 
$num = 5;
$factorial = 1;
for($i = 1;  $i <= $num; $i++){
$factorial *= $i ;
}
echo"Factorial of $num = $factorial<br>";
 
$number = array(10,20,30,40,50);
$sum = 0;
foreach($number as $value){
    $sum += $value;
}
$average = $sum / count ($number);
echo"Sum = $sum<br>";
echo"Average = $average<br>";
 
for($i = 1; $i <= 4; $i++){
    for($j = 1; $j <= $i; $j++){
        echo"$i ";
    }
        echo"<br>";
    }
 
?>