<?php
/**
 * on this page a contact is delete
 * 
 * @author Rafael Mauricio Giraldo Gallego <rafagiga2022@gnail.com>
 */
require './dataSource.php';
require './config.php';

use dataBase\dataSource;

$db= new dataSource($host, $user, $pass, $dataBase, $port);
$sql= "DELETE FROM `user_data` WHERE  id = {$_GET['id']}";
$db->execute($sql);

header('Location: ../public/index.php');

