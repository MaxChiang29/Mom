<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/10
 * Time: 下午 5:20
 */
include __DIR__.'/../../module/db/db.php';
class account extends db{
    //sql 連線
    protected $_conn;
    //mysqli stmt
    protected $_stmt;

    public function __construct(){
        parent::__construct();
    }
    /**
     *  $detail = array ( 'username','account','password' )
     */
    public function create_User($detail){
        try{
            $userid_h = hash('md5',$detail['account'].time());
            $password = hash('md5',$detail['password']);

            $query = "INSERT INTO user VALUES (?,?,?,?)";

            $this->_stmt = mysqli_prepare($this->_conn['conn'],$query);
            if($this->_stmt != true) throw new Exception(mysqli_errno($this->_conn['conn']));
            $this->_stmt->bind_param('ssss',$detail['username'],$password,$detail['account'],$userid_h);
            $this->_stmt->execute();

            printf("\n%d Row inserted.\n",$this->_stmt->affected_rows);

        }catch (Exception $e){
            echo $e->getMessage();

        }

    }

    public function delete_User($userid){


    }

    public function change_User($detail){

    }

    public function check_user($account,$password){

    }

    public function check_account($account){

    }

    private function check_detail(){

    }

    public function testShow(){
        echo 'the account api is enable';
    }
}