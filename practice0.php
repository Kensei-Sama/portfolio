<?php
include 'layout/header.php';
?>

<?php
$arrayLength = rand(100, 200);
$numbers = [];
for ($i=0; $i < $arrayLength; $i++)
{
    $numbers[] = rand ( -100, 100);
}
//var_dump($numbers);
echo "<br>";

$evenNum = 0;
$oddNum = 0;
$zero = 0;
foreach ($numbers as $number) {
  if ($number % 2 === 0) {
    $evenNum++;
  }
  elseif ($numbers % 2 === 1)
  {
    $oddNum++;
  }
  else {
    $zero++;
  }
}

//Sum Odds

$sumOdds = 0;
foreach ($numbers as $key => $value)
{
  if ($value % 2 === 0)
  {
    echo "$value <br>";
  }
  else
  {
    $sumOdds += $value;
  }
}

//Divide them

$upshotOfDivision = $sumOdds / $oddNum;

$rounding = (round($upshotOfDivision));

echo '<br>';
echo " How many nums in the array ? " . $arrayLength;
echo '<br>';
echo " Evens: " . $evenNum;
echo '<br>';
echo " Odds: " . $oddNum;
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
