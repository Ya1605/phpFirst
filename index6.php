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
    echo $name . '- зарплата' . $salary . '-доларів<br>';
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