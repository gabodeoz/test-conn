<?php
/**
 * Description of conexionClass
 *
 * @author Victor G Cruz
 */
class MSsqlBD {
    
    private $server; //'10.225.175.49,1433';    
    private $sesion; //'caee';
    private $pass;  //'caeexz';
    private $dbname;  //'Administracion_Staff';
    public $query;
    public $rows = array();
    private $conn;
    
        
        function __construct($server,$sesion,$pass,$dbname){
            $this->server = $server;
            $this->sesion =$sesion;
            $this->pass=$pass;
            $this->dbname = $dbname;                        
        }
            
        # los siguientes métodos pueden definirse con exactitud y no son abstractos
	# Conectar a la base de datos
	private function open_connection() {
            try {
                $this->conn = new PDO("sqlsrv:Server=" . $this->server . "; database=" . $this->dbname . "; ", $this->sesion, $this->pass);
                $this->conn->setAttribute(PDO::SQLSRV_ATTR_FETCHES_NUMERIC_TYPE, true);
            } catch (PDOException $e) {
                Log::write($e->getMessage());
                Log::write("No fue posible establecer la conexion en la base de datos.");
            }
        }

    # Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
        function execute_single_query() {	    
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
}


