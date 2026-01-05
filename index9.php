<?php
class HelloWorld{

    public function echoMessage($message){
        return $message;
    }
}

$firstmes = new HelloWorld;
echo $firstmes->echoMessage("hello world");
?>