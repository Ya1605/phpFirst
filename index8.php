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

<?php
function rgb($r = 0, $g = 0, $b = 0)
{
    return sprintf("rgb(%d,%d,%d)", $r, $g . $b);
}
echo $rgb(23, 100, 300);
?>
<?php
$date = '31-12-2030';
$newDate = DateTime::createFromFormat('d-m-Y', $date)->format('Y.m.d');
echo $newDate;


?>