<?php
include 'db_connect.php';
class db_common{
    private $conn;
    
    public function __construct(){
        try{

            $db  = new db_connect();
            $dbinfo= $db->connect();
            var_dump($dbinfo);

        }catch(Execption $e){

        }
       
       
    }
}
