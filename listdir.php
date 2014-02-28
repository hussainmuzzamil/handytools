<?php
/*This will enlist all the files at a directory of a remote server*/

$dir="/"; // Directory where files are stored

if ($dir_list = opendir($dir))
{
while(($filename = readdir($dir_list)) != false)
{
?>
<p><a href="<?php echo $filename; ?>"><?php echo $filename;
?></a></p>
<?php
}
closedir($dir_list);
}

?>