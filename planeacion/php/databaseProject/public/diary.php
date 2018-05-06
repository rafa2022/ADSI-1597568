<?php
include '../src/class/connection.php';
/**
 * 
 */
class Diary{
    
    protected $id;
    protected $name;
    protected $lastName;
    protected $phone;
    
    public function __construct($id='', $nam, $lasNam, $pho) {
        $this->id=$id;
        $this->name=$nam;
        $this->lastName=$lasNam;
        $this->phone=$pho;
    }
    
    public function insert(){
        $db = new connection();
        $sql = "INSERT INTO `user_data`(`name`, `lastname`, `phone`) VALUES ('$this->name', '$this->lastName', '$this->phone')";
    $db->query($sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");
    }
}

