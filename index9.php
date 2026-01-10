<?php
class HelloWorld
{

    public function echoMessage($message)
    {
        return $message;
    }
}

$firstmes = new HelloWorld;
echo $firstmes->echoMessage("hello world");
echo "<hr>";
?>

<?php
class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }
    public function divide($a, $b)
    {
        if ($b == 0) {
            return "Ошибка: деление на ноль!";
        }
        return $a / $b;
    }
}
$mycalculate = new Calculator;
echo $mycalculate->add(5, 4);
echo "<hr>";
echo $mycalculate->divide(40, 20);
echo "<hr>";
?>
<?php
class NameShorter
{

    public $length = 4;

    public function shorter($name)
    {
        return substr($name, 0, $this->length);
    }
}

$shortener = new NameShorter;
echo $shortener->shorter("Anastasia");


?>
echo "
<hr>";
<?php
class MaxText
{
    public $length = 6;
    public function longer($text)
    {

        return substr($text, 1, $this->length);
    }
}

$lengthtext = new MaxText;

echo $lengthtext->longer("hello world");

?>