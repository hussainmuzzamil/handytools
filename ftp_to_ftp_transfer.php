<?php
/*
many times we have to transfer file from one ftp to other. conventionl way is you download the file
to your local and then upload it to target server.
Using this script, it will transfer file from one server to other withut downloading it.
>>to make zip file on a server use this link 
https://github.com/hussainmuzzamil/handytools/blob/master/make_zip.php

*/

$server = “ftp . you - server . com”; //address of ftp server (leave out ftp://)
$ftp_user_name = “userName”; // Username
$ftp_user_pass = “passwordHere”; // Password
$source = “ / home / folder / public_html / filename . ext”;
$dest = “ / public_html / filename . ext”;
$mode = ”FTP_BINARY”;
$connection = ftp_connect($server);
$login = ftp_login($connection, $ftp_user_name, $ftp_user_pass);

if (!$connection || !$login)
	{
	die(‘Connectionattemptfailed!’);
	}

$upload = ftp_put($connection, $dest, $source, FTP_BINARY);

if (!$upload)
	{
	echo ‘FTPuploadfailed!’;
	}

ftp_close($connection);
echo “done”;
/* This script was found at phpHelp.co */

?>

