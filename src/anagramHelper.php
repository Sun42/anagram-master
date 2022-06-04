<?php

function isAnagram($str1, $str2, $nb = 0) : bool
{
    if (!isset($str1) || !isset($str2))
        return false;
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    if ($len1 == 0 || $len2 == 0)
        return false;
    if ($len1 != ($len2 - $nb))
        return false;
    if ($str1 == $str2)
        return false;

    $ar1 = charsCounter($str1);
    $ar2 = charsCounter($str2);

    if ($nb == 0)
    {
        //perfect anagram
        return ($ar1 == $ar2);
    }
    else
    {
        $delta = getDelta($str1, $ar2);
        if ($delta == -1)
            return false;
        return ($delta == $nb);
    }
}

function charsCounter($str) : array
{
    $array = [];
    $len  = strlen($str);
    for ($i = 0; $i < $len ; $i++)
    {
        $char = $str[$i];
        // si la clé n'existe pas encore, première occurence
        if (!isset($array[$char]))
            $array[$char] = 1;
        else
            $array[$char] += 1;
    }
    return $array;
}

function getWords($filename)
{
    $words = [];
    $resource = fopen($filename, 'r');
    if (!$resource)
        return false;
    while (($buffer = fgets($resource, 4096)) !== false) {
        $words[] = trim($buffer);
    }
    fclose($resource);
    return $words;
}

function getDelta($word, $ar2) : int
{
    $len = strlen($word);
    // pour chaque char on cherche une correspondance
    // dans le tableau et on décremente
    for ($i = 0; $i < $len; $i++)
    {
        $char = $word[$i];
        if (!isset($ar2[$char]))
            return -1;
        if ($ar2[$char] <= 0)
            return -1;
        $ar2[$char]--;
    }
    $cpt = 0;
    // on retourne la somme des valeurs restantes
    foreach ($ar2 as $char2 => $value)
    {
        $cpt += $value;
    }
    return $cpt;


}