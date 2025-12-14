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

<hr>
<?php
$arr = [
    'cms' => ['joomla', 'wordpress', 'drupal'],
    'colors' => ['blue' => 'голубой', 'red' => 'красный', 'green' => 'зеленый']
];
echo 'Мой любимый цвет' . $arr['colors']['green'];
147
?>

<hr>
<?php
$lang = 'en';
$day = 6;

$days = [
    'ru' => [
        1 => 'понедельник',
        2 => 'вторник',
        3 => 'среда',
        4 => 'четверг',
        5 => 'пятница',
        6 => 'суббота',
        7 => 'воскресенье'
    ],
    'en' => [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday'
    ]
];
echo $days[$lang][$day];
?>