<?php
include 'layout/header.php';
?>

<?php
if (isset($_GET['submitButton'], $_GET[ 'arrayLength' ])) {
    $arrayLength = $_GET['arrayLength'];
    echo $arrayLength;

/*$arrayLength = rand ( 100, 10000);*/
$numbers = [];
for ($i=0; $i < $arrayLength; $i++) 
{ 
    $numbers[] = rand ( -100, 100);
}
// var_dump($numbers);

$pos = 0;
$neg = 0;
$zero = 0;
foreach($numbers as $number)
{
    if ($number > 0)
    {
        $pos++;
    }
    elseif ($number < 0)
    {
        $neg++;
    }
    else
    {
        $zero++;
    }
}
?>

<table>

<tr> <th> Név </th> <th> Darab </th> </tr>
<tr> <td> Pozitív </td> <td> <?= $pos ?> </td> </tr>
<tr> <td> Negatív </td> <td> <?= $neg ?> </td> </tr>
<tr> <td> Nulla </td> <td> <?= $zero ?> </td> </tr>

</table>

<?php
function positive($number)
{
    return $number > 0;
}
$pos = count(array_filter( $numbers, 'positive'));
var_dump($pos);
?>

<?php
$neg = count(array_filter( $numbers, function($number){
    return $number < 0;
}));
var_dump($neg);
}
?>

<form method= 'get'>

<input name = 'arrayLength' type='number'>
<button name = 'submitButton' type= 'submit'> Click Here! </button>

</form>

<?php
include 'layout/footer.php';
?>