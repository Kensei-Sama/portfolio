<?php
/**
* @param int $a
* @param int|null $b
* @return int
*/
function sum(int $a, int $b = null) : int //visszatérési érték típusának a megadása
{
  return $b === null ? $a : $a + $b;
}
//echo sum(20);

function checkLilNums(string $text) : bool
{
  //97-122
  foreach (str_split($text) as $char)
  {
    $ascii = ord($char);
    if ($ascii !== 32 && $ascii < 97 || $ascii > 122)
    {
      return false;
    }
  }
  return true;
}

function checkLilNums2(string $text) : bool
{
  $letters = range('a', 'z');
  $letters[] = ' ';

  foreach (str_split($text) as $index => $currentChar)
  {
    if (!in_array($currentChar, $letters))
    {
      var_dump(ord($currentChar), $index);
      return false;
    }
  }
  return true;
}

function textReverse(string $text)
{
  $splitted = str_split($text);
  $reversedText = [];
  for ($i=count($splitted)-1; $i >= 0; $i--)
  {
    $reversedText[] = $text[$i];
  }
  return implode($reversedText);
}

function textFormat(string $text)
{
  $text = trim($text);
  if (checkLilNums2($text) === true)
  {
    return textReverse($text);
  }
  changeToAscii($text);
  return $text;
}

function changeToAscii(string &$text)
{
  $splittedText = str_split($text);
  $ascii = [];

  foreach ($splittedText as $char)
  {
    $ascii[] = ord($char);
  }
  $text = implode(', ', $ascii);
}
?>
