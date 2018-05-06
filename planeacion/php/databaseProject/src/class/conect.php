<?php
namespace conectphp;
/**
 * conection of data base
 * @author Rafael Mauricio Giraldo Gallego <rafagiga2022@gnail.com>
 */
class conection{
 //declare variables 
 private $server;
 private $userMysql;    
 private $passwordMysql;  
 private $dataBase;
 private $connect;

 function conection($ser,$usu,$pss,$db,$cont){
     $this->server = $ser;
     $this->userMysql = $usu;
     $this->passwordMysql = $pss;
     $this->dataBase = $db;
     $this->connect = $cont;
     $this->connectToMysql();
     $this->selectDataBase();
 }
 private function connectToMysql(){
     $this->connect = mysqli_connect($this->server, 
             $this->userMysql, 
             $this->passwordMysql) or die (mysqli_error());
 }
 private function selectDataBase(){
     mysqli_select_db($this->dataBase) or die (mysqli_error());
}
public function consult($sql){
    $result = mysqli_query($sql,$this->connect);
    return $result;
}
public function nLines($sql){
    return mysqli_num_rows($sql);
}
public function nColum($sql){
    return mysqli_num_fields($sql);
}
public function fieldName($sql,$i){
    return mysqli_field_name($sql,$i);
}
   
}