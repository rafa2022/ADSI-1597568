<?php
/**
 * on this page a contact is added 
 * 
 * @author Rafael Mauricio Giraldo Gallego <rafagiga2022@gnail.com>
 */
require './dataSource.php';
require './config.php';

use dataBase\dataSource;

$db= new dataSource($host, $user, $pass, $dataBase, $port);
$sql= "INSERT INTO `user_data`(`name`, `lastname`, `phone`) VALUES ('{$_POST['txtName']}','{$_POST['txtLastName']}','{$_POST['txtPhone']}')";
$db->execute($sql);

header('Location: ../public/index.php');


