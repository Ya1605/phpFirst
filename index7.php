<?php

use BcMath\Number;

function concat($numb, $value)
{
    return pow($numb, $value);
}
echo concat(2, 5);
?>
<hr>

<?php

function rgb($num1 = 0, $num2 = 0, $num3 = 0)
{
    return "rgb($num1, $num2, $num3)";
}

echo rgb(12, 34, 71);

?>
<hr>

<?php
function avg(array $numbers)

{
    if (count($numbers) === 0) {
        return 0;
    }

    return array_sum($numbers) / count($numbers);
}

echo avg([10, 20, 30, 40]);

?>

<?php

function myNumber($key1, $key2, $key3)
{

    return ($key1 - $key2) / $key3;
}

echo myNumber(10, 20, 30);
?>

<?php
function dayOfWeek($dayNumber)
{

    $days = [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресенье'
    ];
    return $days($dayNumber);
}

echo dayOfWeek(3);
?>