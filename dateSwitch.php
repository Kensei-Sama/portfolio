<?php
include 'layout/header.php';
?>

<?php
define('s1', 'Szendrei Ádám');
define('s0', 'Mex Delux');
define('f0', 'Zig Ziglar');
define('MOTIVATION_THU', 'Nicolas Victor');
define('w0', 'Brian Tracy');
define('t0', 'Szabó Péter');
define('m0', 'Oravecz Nóra');
$today = date('l');

echo $today;
echo '<br>';

switch ($today)
{
    case 'Monday':
        echo m0;
        echo '<p class= "'.StyleClasses::CLASS_MONDAY_THUESDAY . '"> Monday </p>';;
        break;

    case 'Tuesday':
        echo t0;
        echo '<p class= "'.StyleClasses::CLASS_MONDAY_THUESDAY . '"> Tuesday </p>';
        break;

    case 'Wednesday':
        echo w0;
        echo '<p class= "'.StyleClasses::CLASS_WEDNESDAY_THURSDAY . '"> Wednesday </p>';
        break;

    case 'Thursday':
        echo MOTIVATION_THU;
        echo '<p class= "'.StyleClasses::CLASS_WEDNESDAY_THURSDAY . '"> Thursday </p>';
        break;

    case 'Friday':
        echo f0;
        echo '<p class= "'.StyleClasses::CLASS_FRIDAY_SATURDAY_SUNDAY . '"> Friday </p>';
        break;

    case 'Saturday':
        echo s0;
        echo '<p class= "'.StyleClasses::CLASS_FRIDAY_SATURDAY_SUNDAY . '"> Saturday </p>';
        break;

    case 'Sunday':
        echo s1;
        echo '<p class= "'.StyleClasses::CLASS_FRIDAY_SATURDAY_SUNDAY . '"> Sunday </p>';
        break;
    default:
        echo 'nincs ilyen nap';
        break;
}

class StyleClasses
{
  const CLASS_MONDAY_THUESDAY = 'monTue';
  const CLASS_WEDNESDAY_THURSDAY = 'wedThu';
  const CLASS_FRIDAY_SATURDAY_SUNDAY = 'friSatSun';
}
?>

<?php
include 'layout/footer.php';
?>
