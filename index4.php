<?php
$a = 12;
$b = 9;

if ($a % 2 == 0 && $b % 2 == 0) {
    echo "обидва числа парні- $a i $b";
} elseif ($a % 2 === 0) {
    echo "--перше число $a парне";
} else ($b % 2 === 0); {
    echo "--друге число $b непарне";
}
?>
<hr>
<?php
$c = 10;
$d = 3;
if ($c == 0) {
    echo "на нуль ділити не можна";
} elseif ($c % $d == 0) {
    echo "Число $c ділиться на $d без остатку";
} else {
    $remainder = $c % $d;
    echo "Число $c НЕ ділиться на $d. Остаток: $remainder";
}
?>
<hr>

<?php
$year = 2025;
if (($year % 400 == 0) || ($year % 4 && $year % 100 !== 0)) {
    echo "$year - високосний рік";
} else {

    echo "$year - НЕ високосний рік";
}
?>
<hr>
<?php
$num = 21;

if ($num % 2 == 0 && $num % 3 == 0) {
    echo "Число парне і ділиться на 3 та на 6 <br>";
} elseif ($num % 2 == 0 && $num % 3 !== 0) {
    echo "Число парне і не ділиться на 3 та на 6 <br>";
} elseif ($num % 2 !== 0 && $num % 3 == 0) {
    echo "Число нечётное, делится на 3, но НЕ делится на 6.<br>";
} else {
    echo "Число нечётное, НЕ делится ни на 3, ни на 6.<br>";
}

?>

<hr>
<?php
$number = rand(28, 29);

echo "Дальность выстрела: $number<br>";
if ($number >= 27 && $number <= 30) {
    echo "попал";
} else {
    echo "не попал";
}
?>
<hr>
<?php
$min = 34;
if ($min > 1 && $min < 15) {
    echo "Первая четверть часа";
} elseif ($min >= 15 && $min < 30) {
    echo "Вторая четверть часа";
} elseif ($min >= 30 && $min < 45) {
    echo "Третья четверть часа";
} else {
    echo "Четвёртая четверть часа";
}
?>
<hr>
<?php
$num = rand(1, 4);
echo "num = $num\n";

switch ($num) {
    case 1:
        $result = "winter";
        break;
    case 2:
        $result = "spring";
        break;
    case 3:
        $result = "summer";
        break;
    case 4:
        $result = "autumn";
        break;
    default:
        "ERROR";
        break;
}

echo $result;
?>