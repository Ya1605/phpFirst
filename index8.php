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
        $chars[rand(0, strlen($chars) - 1)];
    }

    return $result;
}
?>