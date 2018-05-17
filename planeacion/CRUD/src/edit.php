<?php

/**
 * on this page a contact is edit 
 * 
 * @author Rafael Mauricio Giraldo Gallego <rafagiga2022@gnail.com>
 */
require './dataSource.php';
require './config.php';

use dataBase\dataSource;

$db= new dataSource($host, $user, $pass, $dataBase, $port);
$sql= "SELECT id, name, lastname, phone FROM user_data WHERE id = {$_GET['id']}";
$db->query($sql);
$user = $db->getData();

require '../public/editForm.php';


