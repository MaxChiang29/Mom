<?phpclass db_connect {        private $config;        private $conn;        public function __construct(){            $this->config = parse_ini_file('../config/config.ini',true);            //var_dump($this->config);        }        public  function connect(){                        $result =array(                'status' =>'',                'conn'=>'',                'info'=>'',            );            try{                $this->conn = new mysqli($this->config['database']['host'],$this->config['database']['user'],$this->config['database']['password'],$this->config['database']['dbname']);                $result['status']='Y';                $result['conn'] = $this->conn;                $result['info']='Connect Success!';            }catch(mysqli_sql_exception $e){                /*                    After -> change the new exception system                */                $result['status']='N';                $result['info']=mysqli_connect_error();            }            return $result;        }        public function disconnect(){            $result =array(                'status' =>'',                'conn'=>'',                'info'=>'',            );                        try{                mysqli_close($this->conn);                $result['status']='Y';                $result['conn'] = $this->conn;                $result['info']='Close Success!';            }catch (mysqli_sql_exception $e){                 $result['status']='N';                $result['info']=mysqli_connect_error();            }              return $result;        }}