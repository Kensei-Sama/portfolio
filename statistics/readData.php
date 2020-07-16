<?php

include_once './Population.php';

$fileName = '../files/statistics/data.txt';

$reader = fopen($fileName, 'r');
$populations = [];

while (($line = fgets($reader)) !== false)
{
  $exploded = explode('|', $line);
  $populations[] = new Population($exploded);
}

fclose($reader);

echo '<pre>';
var_dump($populations);
echo '</pre>';
?>

<table>
  <tr>
    <th> Város </th>
    <th> Életkor </th>
    <th> Létszám </th>
  </tr>
  <?php foreach ($populations as $population) : ?>
    <tr>
      <td> <?= $population->city ?> </td>
      <td> <?= $population->age ?> </td>
      <td> <?= $population->number ?> </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php
function getFullPopulationOfCities(array $populations)
{

  foreach ($variable as $key => $value)
  {
    if ()
    {

    }
    else
    {

    }
  }
  return
}

?>
