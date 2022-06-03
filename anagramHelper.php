<?php

function isAnagram($str1, $str2) : bool
{
    if (!isset($str1) || !isset($str2))
        return false;
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    if ($len1 == 0 || $len2 == 0)
        return false;
    if ($len1 != $len2)
        return false;
    if ($str1 == $str2)
        return false;

    $ar1 = charsCounter($str1);
    $ar2 = charsCounter($str2);

    return ($ar1 == $ar2);
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