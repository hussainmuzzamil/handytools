<?php 
/*
Very helpful in transferring huge number of files as a zip and then extract these over remote server.
This tool will extract any zip file in to current directory of a remote web server with the same folder name. 

*/
$zip = new ZipArchive; 
    if ($zip->open("ivm.zip")){ 
        $path = getcwd() . "/"; 
        $path = str_replace("\\","/",$path); 
        echo $path; 
        echo $zip->extractTo($path); 
        $zip->close(); 
        echo 'Done.'; 
    } else { 
        echo "Error"; 
    } 
?>