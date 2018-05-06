<?php

/**
 * In this class I create the connection to the database
 * 
 * @author Rafael Mauricio Giraldo <rafagiga2022@gmail.com>
 */
class connection extends mysqli {

    private $DB_HOST = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $DB_NAME = 'bduserdata';
    
    public function __construct() {
        parent::__construct($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
        $this->set_charset('utf-8');
        $this->connect_errno ? die('error in the connection'. mysqli_connect_errno()) : $m = 'Connected ;D';
        //echo $m;
    }
}
