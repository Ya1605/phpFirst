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