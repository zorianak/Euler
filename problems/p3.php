<?php

/*
 * What is the largest prime factor of the number 600851475143?
 */

include '../support_funs.php';
$problemNumber = 3;
$probDesc = "<p>The prime factors of 13195 are 5, 7, 13 and 29.</p>\n";
$probDesc .= "<p>What is the largest prime factor of the number 600851475143?</p>\n";

headerFun();
print_r($divContent);

eulerDescription();

    print_r($divEuler);
    
        problemThree();
    
    print_r($divClose);

print_r($divClose);
footerFun();

function problemThree()
{
  /*
   * Unfortunately I think I spent most of my time trying to find a formulaic
   * approach to finding prime factors, rather than on the actual programming
   * portion.
  */

 //variables because I hate hardcoding numbers in
$x = 600851475143;
$i = 2;
$answer_array = array();

while ($x > 1)
{
    if (bcmod($x, $i) == 0)
        {
            $x /= $i;
            $answer_array[] = $x;
        }
    $i++;
}

//so the last thing we're going to get is 1.  Thus, we want the length of the
//array, minus two, to get the value of what we want.  Subtracting 2 because
//of index 0.
$answer_index = count($answer_array)-2;

echo 'The largest prime number for 600851475143 is <strong>' . $answer_array[$answer_index] . '</strong>.';
}
?>