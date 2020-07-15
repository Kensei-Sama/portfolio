<?php
include 'layout/header.php';
?>

<?php
include 'functions.php';

$fileName = 'files/sentences.txt';
$newFileName = 'files/new_sentences.txt';

$reader = fopen($fileName, 'r');
$writer = fopen($newFileName, 'w') or die('file cannot open: ' . $newFileName);
if (!$reader)
{
  die('file cannot open' . $fileName);
}

while (($buffer = fgets($reader)) !== false)
{
  var_dump($buffer);
  $newLine = textFormat($buffer) . PHP_EOL;
  var_dump($newLine, '<br>');
  fwrite($writer, $newLine);
}

fclose($reader);
fclose($writer);
?>

<?php
include 'layout/footer.php';
?>
