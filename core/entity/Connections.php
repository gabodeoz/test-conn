<?php
/**
 * Description of Connections
 *
 * @author Microtemm
 */
class Connections  {
    private  $db_host;    
    private  $db_user;
    private  $db_pass ;
    private  $db_name ;
    private  $options ;
    private $dns;
    protected $query;
    public $rows = array();
    private $conn;
    public $result = 0;
    public $message;
    
    public function __construct(  $db_host, $db_port, $db_user, $db_pass, $options){
            $this->dns = "sqlsrv:Server=".$db_host." ;Database= ".$db_name;               
            $this->db_host =$db_host;    
            $this->db_user = $db_user;
            $this->db_pass  = $db_pass;
            $this->db_name = $db_name;
            $this->options = $options;
    }
    
    function test_connection(){
        try {
           $this->conn = new PDO($this->dsn, $this->user, $this->password);
           $this->result =0;
        } catch (PDOException $e) {
            $this->message= $e->getMessage;
            $this->result =0;
        }
    }
    
    protected function get_results_from_query() {
        $this->open_connection();
        
        echo $this->query;
        $result = $this->conn->query($this->query);
       
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->close_connection();
        array_pop($this->rows);
        print_r ($this->rows);
	}    
    # Desconectar la base de datos
    private function close_connection() {
            $this-> conn = null;
    }    
}