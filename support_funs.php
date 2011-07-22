<?php 

/* a few global strings in order to declare a few commonly used DIV classes */

$divEuler = "<div class=\"divEuler\">\n";
$divOutput = "<div class=\"divOutput\">\n";
$divContent = "<div class=\"content\">\n";
$divClose = "</div>\n";

function headerFun()
{
$headString = '';
$headString .= "<!DOCTYPE html> \n";
$headString .= "<html\n>";
$headString .= "    <head>\n";
$headString .= "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
$headString .= "        <title>Project Euler</title>\n";
$headString .= "    </head>\n";
$headString .= "    <body>\n";

echo $headString;

}

function eulerDescription()
{
    //these will be declared at the beginning of every problem.  They provide
    //the problem number and the 
    global $problemNumber;
    global $probDesc;
    
    $eulerDesc = '';
    $eulerDesc .= '<p>This is <strong>Problem ' . $problemNumber . '</strong> of Project Euler.</p>';
    
    print_r($eulerDesc);
    print_r($probDesc);
}


function footerFun()
{
    $footString = '';
    $footString .= "</body>\n";
    $footString .="</html>\n";
    
    echo $footString;
}