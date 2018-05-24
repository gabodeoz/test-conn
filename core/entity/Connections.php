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
    //Database URL	jdbc:sqlserver://10.225.175.49:1433;databaseName=Administracion_Staff
   /*
    * $dbHandle = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$dbHandle->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// always disable emulated prepared statement when using the MySQL driver
$dbHandle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    */
    
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