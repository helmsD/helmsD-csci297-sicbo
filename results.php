<!DOCTYPE HTML>
<head>
    <title>Results</title>
</head>
<body>
<?php

$money = 0;
$rollOne = rand(1,6);
$rollTwo = rand(1,6);
$rollThree = rand(1,6);
$sum = $rollOne+$rollTwo+$rollThree;
$big = $_GET["big"];
$small = $_GET["small"];
$even = $_GET["even"];
$odd = $_GET["odd"];

imageDisplay($rollOne);
imageDisplay($rollTwo);
imageDisplay($rollThree);
echo "<br>";

echo "Your Roll: $sum <br><br>";

//////////////Big Bet///////////////////////////
echo "<strong>Big Bet:</strong>";
if (isset($_GET["big"]) && is_numeric($big)) {

    echo "You bet: $$big";

    if($sum > 10)
        {
        $big *= 2;
        $money += $big;
        echo " and gained: $$big <br><br>";
        }
    else {
        $money -= $big;
        echo " and lost $$big <br><br>";
    }
}
else if (ctype_alpha($big)){
    echo "Please enter a numeric value. <br><br>";
}
else {
    echo "You did not place a big bet. <br><br>";
}
//////////////End of Big Bet///////////////////////

//////////////Small Bet////////////////////////////

echo "<strong>Small Bet:</strong>";
if (isset($_GET["small"]) && is_numeric($small)){

    echo "You bet: $$small";

    if($sum > 0 && $sum <= 10)
        {
        $small *= 2;
        $money += $small;
        echo " and gained: $$small <br><br>";
        } 
    else {
        $money -= $small;
        echo " and lost $$small <br><br>";
    }
}
else if (ctype_alpha($small)){
    echo "Please enter a numeric value. <br><br>";
}
else {
    echo "You did not place a small bet. <br><br>";
}

/////////////////////End of small bet////////////////

////////////////////Even Bet/////////////////////////

echo "<strong>Even Bet:</strong>";

if (isset($_GET["even"]) && is_numeric($even)){

    echo "You bet: $$even";

    if ($sum % 2 == 0) {
        $even *= 2;
        $money += $even;
        echo " and gained: $$even <br><br>";
    }
    else{
        $money -= $even;
        echo " and lost: $$even <br><br>";
    }
}
else if (ctype_alpha($even)){
    echo "Please enter a numeric value. <br><br>";
}
else {
    echo "You did not place an even bet. <br><br>";
}

////////////////End of Even Bet//////////////////////////

////////////////Odd Bet//////////////////////////////////

echo "<strong>Odd Bet:</strong>";

if (isset($_GET["odd"]) && is_numeric($odd)){

    echo "You bet: $$odd";

    if ($sum % 2 != 0) {
        $odd *= 2;
        $money += $odd;
        echo " and gained $$odd <br><br>";
        }
    else {
        $money -= $odd;
        echo " and lost: $$odd <br><br>";
    }
}
else if (ctype_alpha($odd)){
    echo "Please enter a numeric value. <br><br>";
}
else {
    echo "You did not place an odd bet. <br><br>";
}

 echo "Total: $$money <br><br>";


 //////////////////Function///////////////////
 function imageDisplay(int $num) {
    if ($num == 1){
        echo "<img src='images/Alea_1.png' />";
    }
    else if ($num == 2){
        echo "<img src='images/Alea_2.png' />";
    }
    else if ($num == 3){
        echo "<img src='images/Alea_3.png' />";
    }
    else if ($num == 4){
        echo "<img src='images/Alea_4.png' />";
    }
    else if ($num == 5){
        echo "<img src='images/Alea_5.png' />";
    }
    else if ($num ==6){
        echo "<img src='images/Alea_6.png' />";
    }
    else {
        echo "Image Display Error";
    }
 }
?>
<a href="sicbo.php">Make Another Bet</a>
</body>
</html>