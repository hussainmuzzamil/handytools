<?php
//updatimg  a record in a MongoDB Collection using php
// source: http://www.9lessons.info/2013/01/mongodb-php-tutorial.html

$update = array(“$set” => array(“user” => “demo@9lessons.info”));
$where = array(“password” => “password”);
$people->update($where,$update);
?>