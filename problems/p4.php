<?php

/*
 * A palindromic number reads the same both ways. The largest palindrome made 
 * from the product of two 2-digit numbers is 9009 = 91 × 99.
 * 
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

include '../support_funs.php';
$problemNumber = 4;
$probDesc = "<p>A palindromic number reads the same both ways. The largest palindrome made\n";
$probDesc = "from the product of two 2-digit numbers is 9009 = 91 × 99.</p>\n";
$probDesc .= "<p>Find the largest palindrome made from the product of two 3-digit numbers.</p>\n";

headerFun();
print_r($divContent);

eulerDescription();

    print_r($divEuler);

        problemFour();

    print_r($divClose);

print_r($divClose);
footerFun();

function problemFour()
{
  /*
   * So basically what I can do is multiply everything from 100 to 999 together
   * and compare the results to see if they are the same forwards as backwards
   * and add everything that's teh same forwards as backwards to an array.
  */

    //make the array to hold the stuff
    $dromes = array();
    $holder = array();
    $i = array();
    $m = array();
    $k = 100;
    
    //populate $i and $k
    for($j = 100; $j < 1000; $j++)
    {
        $i[] = $j;
    }
    
    while ($k < 1000)
    {
        foreach ($i as $num)
        {
            $a = $k * $num;
            
            //get stringvalue of counter times $num
            $n = strval($a);
            //get its reverse
            $bward = strrev($n);
            
            //compare
            if(strcmp($n,$bward)==0)
            {
                intval($a);
                //echo $k . ' and ' . 1 . '<br />';
                $dromes[] = $a;
            }
        }
        
        $k++;
        
    }
    $answer = max($dromes);
echo 'The largest palindrome made from the product of two three-digit numbers is <strong>' . $answer . '</strong>.';
}
?>