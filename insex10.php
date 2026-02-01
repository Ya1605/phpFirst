<?php


class Article{

public const MAX_TITLE_LENGTH = 255;

private const FORBIDDEN_WORDS = [
            'плохо',
            'ужасно',
            'кошмар'

];

public string $title;
public string $description;
public string $author;

public function __construct(string $title, string $description, string $author)
{
   $this->title = $this->prepareTitle($title);
   $this-> description = self::censorDescription($description);
   $this->author = $this->prepareAuthor($author);
}

private function prepareTitle(string $title): string{

if (mb_strlen($title)> self::MAX_TITLE_LENGTH) {

    return mb_substr($title, 0, self::MAX_TITLE_LENGTH);
}
return $title;
}

private function prepareAuthor(string $author):string{

$parts = explode(' ', mb_strtolower(trim($author)));

foreach ($parts as $part) {

    $part = mb_convert_case($part, MB_CASE_TITLE, 'UTF-8');
}

return implode(' ', $parts);

}

private static function censorDescription(string $description):string{

return str_ireplace(
    self ::FORBIDDEN_WORDS,
    '***',
    $description
);
}
}

$a1 = new Article(
    'Це дуже довгий заголовок...',
    'Це було ужасно і повний кошмар.',
    'іванов іван іванович'
);

echo $a1->title . PHP_EOL;
echo $a1->description . PHP_EOL;
echo $a1->author;
?>

<?php 

class Cybertour{

public const Name  = "Tournir";

private array $players = [];

public function addPlayer (string $name, string $surname): void{

$this->players[]=[
    'name' => $name,
    'surname' => $surname
];
}

public function getAllPlayersName():array{

$allNames = [];

foreach($this ->players as $player){
    $allNames[] = $player['name']. ' ' . $player['surname'];
}

return $allNames;
}

}

$tournir = new Cybertour();
$tournir->addPlayer("Ivan", "Ivanov");
$tournir->addPlayer("Anna", "Popova");

echo Cybertour::Name;
print_r($tournir->getAllPlayersName());
?>