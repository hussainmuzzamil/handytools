<?php
//source: updatimg  a record in a MongoDB Collection using php
$people = $db->people;
$insert = array(“user” => “demo@9lessons.info”, “password” => md5(“demo_password”));
$db->insert($insert);
?>