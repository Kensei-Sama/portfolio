<?php
include 'layout/header.php';
?>

<?php
$today = date('D');

echo $today;
echo '<br>';

switch ($today)
{
    case 'Mon':
        echo 'Oravecz Nóra';
        break;
    
    case 'Tue':
        echo 'Szabó Péter';
        break;
    
    case 'Wed':
        echo 'Brian Tracy';
        break;
    
    case 'Thu':
        echo 'Nicolas Victor';
        break;

    case 'Fri':
        echo 'Zig Ziglar';
        break;
    
    case 'Sat':
        echo 'Mex Delux';
        break;

    case 'Sun':
        echo 'Szendrei Ádám';
        break;
    default:
        echo 'nincs ilyen nap';
        break;
}
?>

<?php
include 'layout/footer.php';
?>