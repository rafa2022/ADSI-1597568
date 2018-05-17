<?php

/**
 * on this page a contact is update 
 * 
 * @author Rafael Mauricio Giraldo Gallego <rafagiga2022@gnail.com>
 */
require './dataSource.php';
require './config.php';

use dataBase\dataSource;

$db= new dataSource($host, $user, $pass, $dataBase, $port);
$sql= "UPDATE user_data SET name='{$_POST['txtName']}',lastname='{$_POST['txtLastName']}',phone='{$_POST['txtPhone']}' WHERE id ={$_POST['txtid']}";
$db->execute($sql);

header('Location: ../public/index.php');