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