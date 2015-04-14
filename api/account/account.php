<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/10
 * Time: 下午 5:20
 */
include __DIR__.'/../../module/db/db.php';
class account extends db{
    private $_conn;
    private $_stmt;
    public function __construct(){
        parent::__construct();
    }
    /**
     *  $detail = array ( 'username','account','password' )
     */
    protected function create_User($detail){

        $userid = hash('md5',$detail['account'].time());
        $password = hash('md5',$detail['password']);

        $query = "INSERT INTO user('username','account','password','userid') VALUES (?,?,?,?)";

        $this->_stmt = $this->_conn['conn']->prepare($query);


    }

    protected function delete_User($userid){


    }

    protected function change_User($detail){

    }

    protected function check_user($account,$password){

    }

    private function check_account($account){

    }

    private function check_detail(){

    }
}