<?php
// connect to a db and get a list of all collections
// source: http://www.9lessons.info/2013/01/mongodb-php-tutorial.html


//Get list of databases
$mongo->admin->command(array(“listDatabases” => 1));
//Get list of Collections in test db
$db->listCollections();


?>