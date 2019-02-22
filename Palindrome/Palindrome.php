<?php

class Palindrome
{
    /**
     * @param string $word
     * @return bool
     */
    public static function isPalindrome($word)
    {
    	$word = strtolower($word);
    	$word = str_replace(' ', '', $word);

    	if($word === strrev($word)) {
    		return true;
    	}

    	return false;
    }
}

$return = Palindrome::isPalindrome("Dele veled");
var_dump($return);