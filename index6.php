<?php

$i = 100;

while ($i <= 100) {
    echo $i .  "<br>";
    $i++;
}

?>
<hr>

<?php
$arr = [
    'Коля' => '200',
    'Вася' => '300',
    'Петя' => '400'
];

foreach ($arr as $name => $salary) {
    echo $name . '- зарплата-' . $salary . '-доларів<br>';
}

?>
<hr>
<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {

    $sum += $i;
}

echo $sum;
?>
<hr>
<?php
$arr = [1, 2, 5, 9, 4, 13, 4, 10];

foreach ($arr as $num) {
    if ($num == 4); {
        echo 'Есть!';
        break;
    }
}
?>
<hr>

<?php
$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}
print_r($arr);
?>

<hr>
<?php
$number = 1000;
$count = 0;

while ($number >= 50) {

    $number /= 2;
    $count++;
}

echo "result $number<br>";
echo "кількість разів - $count";
?>

<hr>
<?php
$array = [2, -10, 56, -4];
$sum = 0;
foreach ($arr as $value) {
    if ($value > 0) {
        $sum += $value;
    }
}

echo $sum;
?>