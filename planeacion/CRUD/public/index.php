<?php 
require '../src/dataSource.php';
require '../src/config.php';
use dataBase\dataSource;

$db = new dataSource($host, $user, $pass, $dataBase, $port);
$sql ='SELECT `id`, `name`, `lastname`, `phone` FROM `user_data`';
$db->query($sql);
require './table.php';
