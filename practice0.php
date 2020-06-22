
<?php
$arrayLength = rand(100, 200);
$numbers = [];
for ($i=0; $i < $arrayLength; $i++)
{
    $numbers[] = rand ( -100, 100);
}
//var_dump($numbers);


$zero = 0;
$odds = [];
$evens = [];

foreach ($numbers as $number) {
  if ($number % 2 === 0) {
    $evens[] = $number;
  }
  elseif ($numbers % 2 === 1)
  {
    $odds[] = $number;
  }
  else {
    $zero++;
  }
}


//Divide them
$sumOdds = array_sum($odds);

$countEvens = count($evens);
$upshotOfDivision = $sumOdds / $countEvens;

$rounding = (round($upshotOfDivision));

include 'layout/header.php';


echo '<br>';
echo " How many nums in the array ? " . $arrayLength;
echo '<br>';
echo " Evens: " . $countEvens;
echo '<br>';
echo " Odds: " . count($odds);
echo '<br>';
echo " Zeros: " . $zero;
echo '<br>';
echo "Sum of odds: " . $sumOdds;
echo '<br>';
echo "Upshot of Division: " . $upshotOfDivision;
echo '<br>';
echo "Upshot of Rounding previous upshot: " . $rounding;
echo '<br>';
?>


<?php
include 'layout/footer.php';
?>
