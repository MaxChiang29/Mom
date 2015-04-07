<?php
class db_connect {
        private $config;
        private $conn;

        public function __construct(){
            $this->config = parse_ini_file('../config/config.ini');
            //var_dump($this->config);
        }
        public  function connect(){
            
            $result =array(
                'status' =>'',
                'conn'=>'',
                'info'=>'',
            );
            try{
                $this->conn = new mysqli($this->config['DB_HOST'],$this->config['DB_USER'],$this->config['DB_PASSWORD'],$this->config['DB_NAME']);
                $result['status']='Y';
                $result['conn'] = $this->conn;
                $result['info']='Connect Success!';
            }catch(mysqli_sql_execption $e){
                /*
                    After -> change the new exception system
                */
                $result['status']='N';
                $result['info']=mysqli_connect_error();
            }
            return $result;
        }

        public function disconnect(){

            $result =array(
                'status' =>'',
                'conn'=>'',
                'info'=>'',
            );
            
            try{
                $this->conn->close();
                $result['status']='Y';
                $result['conn'] = $this->conn;
                $result['info']='Close Success!';
            }catch (mysqli_sql_execption $e){
                 $result['status']='N';
                $result['info']=mysqli_connect_error();
            }
              return $result;
        }

}