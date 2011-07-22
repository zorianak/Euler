<?php

/*
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we 
 * get 3, 5, 6 and 9. The sum of these multiples is 23.
 * 
 * Find the sum of all the multiples of 3 or 5 below 1000.
 * 
 * So basically what we want to do is loop through 1-1000 first for 3s, and then
 * for 5s and add those to two, and then compare the two so we don't get double 
 * values.
 */

include '../support_funs.php';
$problemNumber = 1;
$probDesc = "<p>If we list all the natural numbers below 10 that are multiples ";
$probDesc .= "of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.</p>";
$probDesc .= "<p>Find the sum of all the multiples of 3 or 5 below 1000.</p>";

headerFun();
print_r($divContent);

eulerDescription();

    print_r($divEuler);
    
        problemOne();
    
    print_r($divClose);

print_r($divClose);
footerFun();

function problemOne(){
    
    //make 2 empty arrays to hold the data
    $three = array();
    $five = array();
    
    //create the 3s array.  It is initialized at 3 because we want multiples of
    //3, and it doesn't make sense to go through 1-1000.
    for($i = 3; $i<1000; $i = $i + 3)
    {
        $three[] = $i;
    }
    
    //create the array of 5s
    for($i = 5; $i < 1000; $i = $i+5)
    {
        $five[] = $i;
    }
    
    //remove anything from our array of multiples of five that are multiples of
    //three.
    $newFive = array_diff($five,$three);
    
    
    //merge our array of multiples of five (but not three) and our array of
    //multiples of threes.
    $total = array_merge((array)$newFive, (array)$three);
    
    $total_sum = array_sum($total);
    
    echo 'The sum total of all multiples of three and five below 1000 is <strong>' . $total_sum . '</strong>.';
}
?>