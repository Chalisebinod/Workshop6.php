<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- 1. To count 5 to 15 using PHP loop. -->
<?php
for( $i=5; $i<=15; $i++){
    echo $i. ' '; 
}
echo "<br>";
?>

<!-- 2.	To print “Hello World” using PHP variable. -->
<?php
echo("Hello World. <br>")
?>

<!-- 3.	To check student grade based on marks. -->
<?php
$marks = 75;

if ($marks >= 80) {
    echo "Congratulations! Grade A obtained. <br>";
} elseif ($marks >= 70) {
    echo "Very Good! Grade B obtained. <br>";
} elseif ($marks >= 60) {
    echo "Good! Grade C obtained. <br>";
} else {
    echo "Better luck next time. <br>";
}
?>

 <!-- 4. To find factorial of a number using loop in PHP -->
 <?php
$num = 12;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "The factorial of $num is $factorial. <br>";
?>

<!-- 5.	To create a given pattern with * using for loop -->
<?php
$rows = 7;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>


<!-- 6.	$list = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ; -->
<!-- Create a PHP script which displays the capital and country name from the above array $list. Sort the list by the name of the capital -->
<?php

$list = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);
asort($list);
foreach ($list as $country => $capital) {
    echo "The capital of $country is $capital. <br>";
}
?>

<!-- no-7 -->
<?php
    $in="mam";//apple !=elppa  dad=dad mom=mom 
    $new="";
    $i=strlen($in)-1;
    while ($i>=0){
        $new.=$in[$i];
        $i--;
    }
    echo($new);
    if ($in==$new){
        echo("<br/>It is palindrome.");
    }else{
        echo("<br/>It is not palindrome.");
    }
        ?>
  
<!-- 8.	To swap two variables -->
<!-- Eg: $a = 1; $b =2; Result: $a = 2; $b=1 -->
<?php
$a = readline("Enter the value of variable a: ");
$b = readline("Enter the value of variable b: ");
echo "Original values: a = $a, b = $b\n";
$temp = $a;
$a = $b;
$b = $temp;
echo "Swapped values: a = $a, b = $b <br>";
?>

<!-- 9.	To print the multiple of a given number
Example:
define('a',5);
5 10 15 20 25 30 35 40 45 50 use <br> to print in each line -->
<?php
define('a', 5);

for ($i = 1; $i <= 10; $i++) {
    $multiple = a * $i;
    echo $multiple;
    if ($i != 10) {
        echo "<br>";
    }
}
?>


<!-- 10.	To find whether given number is Armstrong or not.
Example:
$number = 153
If ($number == 1*1*1+5*5*5+3*3*3)
Return Armstrong number
Other number: 1, 0, 371, 407 etc  -->
<?php

    $num=31;
    $res=$num;
    $sum=0;
    while($res>0){
        $new=($res%10)**3;
        $sum=$sum+$new;
        $res=(int)($res/10);
    }
    if($sum==$num){
        echo("<br/>".$num." is a Armstrong number.<br/>");
    }else if($sum!=$num){
        echo("<br/>".$num." is not a Armstrong number.<br/>");
    }
    ?>
    </body>
</html>