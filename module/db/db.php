<?phpinclude 'db_connect.php';abstract class db{    protected $_conn;    public function __construct(){        try{            $db  = new db_connect();            $this->_conn = $db->connect();            if($this->_conn['status']!='Y') throw new Exception();        }catch(Exception $e){            echo $this->_conn['info'];        }    }    /**     * TODO 增加sql語法轉換與功能     */    public function query(){    }    private function _delete(){    }    private function _insert(){    }    private function _update(){    }    private function _select(){    }}