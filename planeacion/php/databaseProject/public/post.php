<?php
include 'diary.php';
/**
 * receive information from the form and insert database
 * 
 * Rafael Mauricio Giraldo <rafagiga2022@gmail.com>
 */
if (isset($_POST['submit'])){
    if ($_POST['acction']=='insert'){
        $nam = $_POST['name'];
        $lasNam = $_POST['lastName'];
        $pho = $_POST['phone'];
        
        $diary = new Diary($id='',$nam, $lasNam, $pho);
        $diary->insert();

    }
    if ($_POST['acction']=='update'){
        
    }
    
} else {
    echo 'puto';
}
