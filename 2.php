<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $word=strtolower($word);
        $len = strlen($word);
        $len1= $len - 1;
        if($len<=1){
            return true;
        }
        for($i=0; $i<$len;$i++){
           if(substr($word,$i,1)!=substr($word,$len1-$i,1)){
                return false;
               
            }
        }
        return true;
    }
}

echo Palindrome::isPalindrome('Deleveled');