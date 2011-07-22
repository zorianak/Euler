<?php

include 'support_funs.php';

//function creates the list of projects in the current problems directory.
function createFileList()
{
    $directory = 'problems';
    $files = scandir($directory);
    
    print_r($files);
    
    $fileQuery = "<RAWR>";
    $fileString = $fileQuery;
    
    $fileHtml = "";
    $fileHtml .= "<div class=\"fileHtml\"> \n";
    $fileHtml .= "<ul> \n";
    
    //loop through all of the files in $files
    foreach($files as $pnum => $page)
    {
        if($page !="." && $page !="..")       
        {
            //now we need to make a new string and clear what we were working with
            //$fileString = str_replace($fileQuery,$files[$i+2],$fileString);
            
            //because of how scandir works, the actual page number we're on is
            //smaller than the index number. $rpnum (real page number) will be
            //this "real" page number.
            $rpnum = $pnum - 1;
            
            $fileHtml .= "<li> \n";
            $fileHtml .= "<a href=\"/PEuler1/problems/" . $page . "\">";
            $fileHtml .= "Problem " . $rpnum;
            $fileHtml .= "</a>";
            $fileHtml .= "</li> \n";
        }
    }
    
    $fileHtml .= "</ul> \n";
    $fileHtml .= "</div>";
    
    print_r($fileHtml);
}



headerFun();

print_r($divContent);
createFileList();
print_r($divClose);

footerFun();

?>