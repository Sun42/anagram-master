<?php

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
