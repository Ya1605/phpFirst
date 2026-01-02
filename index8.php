<?php
$randNumb = random_int(1, 30);
echo $randNumb;

?>

<?php
function randNumber($length)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $result = '';

    for ($i = 0; $i < $length; $i++) {
        $result .= $chars[rand(0, strlen($chars) - 1)];
    }

    return $result;
}
?>
<hr>
<?php
function rgb($r = 0, $g = 0, $b = 0)
{
    return sprintf("rgb(%d,%d,%d)", $r, $g, $b);
}
echo rgb(23, 100, 300);
?>
<hr>
<?php
$date = '31-12-2030';
$newDate = DateTime::createFromFormat('d-m-Y', $date)->format('Y.m.d');
echo $newDate;

?>
<hr>
<?php
function splitArray($array, $size)
{
    return array_chunk($array, $size);
}

$arr = [123, 22, 34, 456, 56, 78, 709];
$result = splitArray($arr, 3);

print_r($result);
?>

<hr>
<hr>
<?php

function countWord($string)
{
    return str_word_count($string);
}

echo countWord("Hello my dear friend");

?>
<hr>
<?php
function newString($array)
{

    return array_map(function ($item) {
        return ucfirst(strtolower($item));
    }, $array);
}

$arr = ["hello", "how", "are", "you"];
$res = newString($arr);
print_r($res);
?>
<hr>
<?php

function myShuffle($arr)
{

    $newArr = $arr;
    shuffle($arr);
    return $newArr;
}

$nerArMy = [1, 2, 3, 4, 5];
$result = myShuffle($nerArMy);
print_r($result);

?>