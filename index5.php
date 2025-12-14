<?php
$arr = ['Привет, ', 'мир', '!'];

$newArr = implode('', $arr);

print_r($newArr);
?>
<hr>

<?php

$salary = [

    'Petya' => 1000,
    'kolya' => 4000,
    'Olha' => 7000
];

print_r('Petyas salary' . $salary['Petya']);

?>
<hr>
<?php

$colors = [
    'ru' => ['голубой', 'красный', 'зеленый'],
    'en' => ['blue', 'red', 'green'],
];
print_r($colors['en'][2]);
?>
<hr>
<?php
$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];

echo $result;
?>