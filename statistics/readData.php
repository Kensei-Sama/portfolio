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

// echo '<pre>';
// var_dump($populations);
// echo '</pre>';
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

<table>
  <tr>
    <th> Város </th>
    <th> Létszám </th>
  </tr>
  <?php foreach (getFullPopulationOfCities($populations) as $city => $populationOfCity) : ?>
    <tr>
      <td> <?= $city ?> </td>
      <td> <?= $populationOfCity ?> </td>

    </tr>
  <?php endforeach; ?>
</table>

<?php
function getFullPopulationOfCities(array $populations)
{
  var_dump($populations);
  $populationOfCities = [];
  foreach ($populations as $populationKey => $population)
  {
    if (isset($populationOfCities['Tokyo']))
    {
      $populationOfCities['Tokyo'] += $population->number;
    }
    if (isset($populationOfCities['Csampa']))
    {
      $populationOfCities['Csampa'] += $population->number;
    }
    if (isset($populationOfCities['Sopron']))
    {
      $populationOfCities['Sopron'] += $population->number;
    }
    if (
    !isset($populationOfCities['Sopron']) ||
    !isset($populationOfCities['Csámpa']) ||
    !isset($populationOfCities['Tokyo'])
    )
    {
      $city = $population->city;
      $populationOfCities[$city] = $population->number;
    }
  }
  return $populationOfCities;
}

//array_key_exists vagy isset

?>
