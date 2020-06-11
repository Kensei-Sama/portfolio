
<?php

$numbers = [1, 2, 3, 9 ];
$i = 0;
$sum = 0;

while($i < count($numbers))
{
    echo $numbers[$i] . ' ';
    $sum = $sum + $numbers[$i];
    $i++;
}
echo'<br>';
echo 'Összeg:'. $sum;
echo'<br>';

$sum = 0;

for ($i=0; $i < count($numbers); $i++) 
{ 
    echo $numbers[$i] . ' ';
    $sum = $sum + $numbers[$i];
}
echo'<br>';
echo 'Összeg:'. $sum;
echo'<br>';

$sum = 0;
foreach ($numbers as $number) 
{
    echo $number . ' ';
    $sum += $number; 
}
echo '<br>';
echo 'Összeg: '. $sum;
echo '<br>';

echo 'Összeg: '. array_sum($numbers);
?>

<form method="get">

<br>
<select name='nums[]' multiple size='20'>

<?php
for ($i=1; $i <= 100; $i++) 
{ 
    echo '<option value="' . $i . '">' . $i . '</option>';
}
?>

</select>
<br>
<button name="submit-button" type='submit'>Click here!</button>
</form>

<?php

if (isset($_GET['submit-button'], $_GET['nums'])) 
{
    # code...
    /*var_dump($_GET['nums']);*/
    $numbers = $_GET['nums'];
    echo 'Összeg: '. array_sum($numbers);
}

?>