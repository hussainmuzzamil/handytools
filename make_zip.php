<?php
///////////////////////////////////////////////////////////////////////////////////////////
// Adding files to a .zip file, no zip file exists it creates a new ZIP file
// got this solution form http://stackoverflow.com/questions/3828385/compress-archive-folder-using-php-script
// this is tested and verified script
////////////////////////////////////////////////////////////////////////////////////////
//bug fund as its only good for 1st level of archive not nested 

// increase script timeout value
ini_set('max_execution_time', 5000);

// create object
$zip = new ZipArchive();

// open archive 
if ($zip->open('my-archive.zip', ZIPARCHIVE::CREATE) !== TRUE) {
    die ("Could not open archive");
}

/////////////////////////////////////////////////////////////////////////////////////////////////

// initialize an iterator
// pass it the directory to be processed
// this is where all the magic happens. add the directory to be zipped here

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("paycol/"));
/////////////////////////////////////////////////////////////////////////////////////////////////


// iterate over the directory
// add each file found to the archive
foreach ($iterator as $key=>$value) {
    $zip->addFile(realpath($key), $key) or die ("ERROR: Could not add file: $key");
}

// close and save archive
$zip->close();
echo "Archive created successfully.";
?>