<?php
include 'layout/header.php';
?>

<?php
//$ascii = rand( 48, 122);
//$char = chr($ascii);

$chars = [];
for ($i=0; $i < rand(5, 100); $i++) 
{ 
    $chars[] = chr(rand( 48, 122));
}


$searchableChar = 'A';
$sideVar = false;
for ($i=0; $i < count($chars); $i++) 
{

    echo $chars[$i] . ' ';
    if ($chars[$i] === $searchableChar)
    {
        $sideVar = true;
        break;
    }
    
}

if ($sideVar)
{
    echo '<p class= "found"> Megataláltam! </p>';
}
else
{
    echo '<p class= "no-found"> Nem talátam meg! </p>';
}

$sideVar = false;
foreach ($chars as $char)
{
    if ($char === $searchableChar)
    {
        $sideVar = true;
        break;
    }
}


if ($sideVar)
{
    echo '<p class= "found"> Megataláltam! </p>';
}
else
{
    echo '<p class= "no-found"> Nem talátam meg! </p>';
}


$sideVar = false;
$i = 0;
while ($i < count($chars) && $sideVar === false)
{
    if ($chars[$i] === $searchableChar)
    {
        $sideVar = true;
    }
    // az indexet mindig a végén incrementaljuk
    $i++;
}

if ($sideVar)
{
    echo '<p class= "found"> Megataláltam! </p>';
}
else
{
    echo '<p class= "no-found"> Nem talátam meg! </p>';
}
?>


<?php
include 'layout/footer.php';
?>