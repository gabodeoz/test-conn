<?php
/**
 * Description of conexionClass
 *
 * @author Victor G Cruz
 */
class ConectionBDPDO {
    /*
     * Engines:
     *           mysql = MySQL 
     *           sqlsrv = MSSQL      SERVER =//'ip,1433';*
     */
    private $engine;
    private $server; 
    private $sesion; //
    private $pass;  //
    private $dbname;  //
    public $rows = array();
    private $conn;
    
        
        function __construct($engine,$server,$sesion,$pass,$dbname){
            $this->engine = $engine;
            $this->server = $server;
            $this->sesion =$sesion;
            $this->pass=$pass;
            $this->dbname = $dbname;                        
        }
            
        # los siguientes métodos pueden definirse con exactitud y no son abstractos
	# Conectar a la base de datos
	private function open_connection() {
            try {
                
                $strConn=$this->getStrConection($this->engine);                
                $this->conn = new PDO($strConn, $this->sesion, $this->pass);
                $this->conn->setAttribute(PDO::SQLSRV_ATTR_FETCHES_NUMERIC_TYPE, true);
            } catch (PDOException $e) {
                Log::write($e->getMessage());
                Log::write("No fue posible establecer la conexion en la base de datos.");
            }
        }

    # Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
        function exec_query() {	    
	        $this->open_connection();
	        $this->conn->query($this->query);	                         
                $this->conn=null;
	}

        # Traer resultados de una consulta en un Array

        function get_results_from_query() {
            try{
            $this->open_connection();
            $sth = $this->conn->prepare($this->query);
            $sth->execute();
           //
            while ($this->rows[]= $sth->fetch(PDO::FETCH_ASSOC));
             array_pop($this->rows);
            }catch (Exception $e){
              Log::write ( $e->getMessage());
            }                       
            $sth= null;
            $this->conn=null;
        }                
        
        private function getStrConection($engine){
            
            if($engine=='sqlsrv')
                return$engine.":Server=" . $this->server . "; database=" . $this->dbname . "; ";
            if($engine=='mysql')
                return $engine.":host=". $this->server .";dbname=". $this->dbname ;
                
        }
}


