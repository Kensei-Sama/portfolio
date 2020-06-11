<?php
include 'layout/header.php';
?>

<?php
$arrayLength = rand ( 100, 10000);
$numbers = [];
for ($i=0; $i < $arrayLength; $i++) 
{ 
    $numbers[] = rand ( -100, 100);
}
/* var_dump($numbers); */

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
include 'layout/footer.php';
?>