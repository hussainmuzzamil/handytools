<title> Generate Secure passwords </title> 	
<?php

// Script Modified on 07-Sept-2014
// This function will generate 16 chars passwords 

function getRandomString($length = 16) {
    $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ+-*#&@!?1234567890*)(_+^%$#@";
    $validCharNumber = strlen($validCharacters);
 
    $result = "";
 
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $validCharNumber - 1);
        $result .= $validCharacters[$index];
    }
 
    return $result;
}
 
echo "The passord is";
echo "<br>";
echo "<br>";
echo  getRandomString(); //from here you will get your password 
echo "<br>";
echo "<br>";
echo "Hit Refresh to get a new password "
?>