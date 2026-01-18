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

$article = new Article(
    'Це дуже довгий заголовок...',
    'Це було ужасно і повний кошмар.',
    'іванов іван іванович'
);

echo $article->title . PHP_EOL;
echo $article->description . PHP_EOL;
echo $article->author;
?>