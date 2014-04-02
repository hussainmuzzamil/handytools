<?php
//source: http://www.9lessons.info/2013/01/mongodb-php-tutorial.html
$people = $db->people;
$insert = array(“user” => “demo@9lessons.info”, “password” => md5(“demo_password”));
$db->insert($insert);
?>