<?php 
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