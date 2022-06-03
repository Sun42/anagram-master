<?php

include "anagramHelper.php";

function print_usage()
{
    echo 'USAGE' . PHP_EOL;
    echo 'php anagram.php s1 [nb]' . PHP_EOL;
    echo 'DESCRIPTION' . PHP_EOL;
    echo 's1 Requis Le mot recherché' . PHP_EOL;
    echo 'nb Optionnel Le nombre de lettres en moins toléré pour trouver une anagramme' . PHP_EOL;
}


if ($argc < 2)
{
    print_usage();
    exit(1);
}
if ($argc == 2)
{
    $nb = 0;
}
if ($argc >= 3)
{
    $nb = (int)$argv[2];
    if (($nb < 0) || $nb >= strlen($argv[1]))
    {
        echo "Veuillez rentrer un nombre correct\n";
    }
}
$words = getWords("anagram-master-dictionnaire.txt");
foreach ($words as $word)
{
    if (isAnagram($word, $argv[1], $nb))
        echo "$word\n";
}
