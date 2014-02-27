<?php 
/*
most of the time when on remote server, we dont know what is the directory details where we are working
at. this little file will let you know what is your current directory
*/

{ 
        $path = getcwd() . "/"; 
        $path = str_replace("\\","/",$path); 
        echo $path; 
        
    } 
?>