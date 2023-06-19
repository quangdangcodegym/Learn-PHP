<?php
include_once('db.php');
$db = new db();
$connect = $db->connect();

$sql = "INSERT INTO customer(fullname, age, address) values ('Quang DAng', 12, 'AAAA')";
$connect->exec($sql);

?>