<?php

function my_strcmp(string $s1,string $s2) : int
{
    return strcmp($s1, $s2);
}

/**
 * []
 */
function char_match($char, &$ar2) : bool
{
    $len = count($ar2);
    for ($i = 0; $i < $len; $i++)
    {

        // if key exists && value == true
        if ($ar2[$i][0] == $char && $ar2[$i][1] === true)
        {
            $ar2[$i][1] = false;
            return true;
        }
    }
    return false;
}

function isAnagram($s1, $s2) : bool
{
    if (!isset($s1) || !isset($s2))
        return false;
    $len1 = strlen($s1);
    $len2 = strlen($s2);
    if ($len1 == 0 || $len2 == 0)
        return false;
    if ($len1 != $len2)
        return false;
   if (my_strcmp($s1, $s2) == 0)
        return false;
    
    // $ar2 = [['s', true], ['t'=> true]] 
    
    for ($i = 0; $i < $len1; $i++)
    {
        if (!char_match($s1[$i], $ar2))
        {
            return false;
        }
    }
    // ici verifier que $ar2 est tout bon
    return true;
    throw new Exception("not implemented");
}