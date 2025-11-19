<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        <?php echo "how was your day" ?>
        <hr>

        <?php
        //змінна

        $oneConst = 10;
        echo $oneConst;   //просто значення

        $secConst = 20;
        var_dump($secConst);   //тип і значення
        ?>

        <?php
        //присвоєння значення  
        $name = "Alex";
        echo ($name);

        $isNameSet = isset($name); //перевірка на наявність
        var_dump($isNameSet);

        //видалення
        unset($name);
        var_dump($name);
        ?>

        <?php
        $GLOBALS['myValue'] = "449";
        echo $GLOBALS['myValue']; ?>

        <?php
        $const = "how are you";
        $Const = "how are you";
        $CONST = "how are you";

        echo $const;
        echo $Const;
        echo $CONST;
        ?>
    </h2>
</body>

</html>