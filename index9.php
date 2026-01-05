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

?>