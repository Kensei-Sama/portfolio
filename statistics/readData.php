<?php
$fileName = '../files/statistics/data.txt';

$reader = fopen($fileName, 'r');
$populations = [];

while (($line = fgets($reader)) !== false)
{
  $populations[] = explode('|', $line);
}

fclose($reader);
?>

<table>
  <tr><th> Város </th><th> Életkor </th><th> Létszám </th></tr>
  <?php foreach ($populations as $population) : ?>
    <tr>
      <td> <?= $population[0]?> </td>
      <td> <?= $population[1]?> </td>
      <td> <?= $population[2]?> </td>
    </tr>
  <?php endforeach; ?>
</table>

<table>
  <tr><th> Csámpa </th><th> Tokyo </th><th> Sopron </th></tr>
  <?php foreach ($populations as $population) : ?>
    <tr>
      <td> <?= $population[0]?> </td>
      <td> <?= $population[2]?> </td>
    </tr>
  <?php endforeach; ?>
</table>
