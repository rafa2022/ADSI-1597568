<?php

namespace dataBase;

class dataSource {

    /**
     * In this class you make the connection whit data base
     * 
     * @author Rafael Mauricio Giraldo Gallego <rafagiga2022@gnail.com>
     */
    private $host;
    private $user;
    private $pass;
    private $dataBase;
    private $port;
    private $connection;
    private $dataQuery;

    public function __construct($host, $user, $pass, $dataBase, $port) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dataBase = $dataBase;
        $this->port = $port;
        $this->getConection();
    }

    private function getConection() {
        $this->connection = mysqli_connect("p:{$this->host}", $this->user, $this->pass, $this->dataBase, $this->port);
       
    }

    public function query($sql) {
        $this->dataQuery = mysqli_query($this->connection, $sql);
    }
    public function getData (){
        return mysqli_fetch_assoc($this->dataQuery);
    }
    public function execute($sql) {
        mysqli_query($this->connection, $sql);
    }

}
