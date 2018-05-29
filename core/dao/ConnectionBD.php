<?php
/**
 * Description of conexionClass
 *
 * @author Victor G Cruz
 */
abstract class ConectionBD{
    //put your code here
    private static $server = 'localhost';
    //sagil23'@'localhost
    private static $sesion = 'user_monitor';
    private static $pass = 'wszLmTJZdWjvd4wF';
    private static $database = 'monitordb';
    protected $query;
    public $rows = array();
    private $conn;
    public $mensaje = 'ok';

    # los siguientes métodos pueden definirse con exactitud y no son abstractos
	# Conectar a la base de datos
	private function open_connection() {
	    $this->conn = new mysqli(self::$server, self::$sesion, 
	                             self::$pass, self::$database);
	}

	# Desconectar la base de datos
	private function close_connection() {
		$this->conn->close();
	}

	# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
	protected function execute_single_query() {	    
	        $this->open_connection();
	        $this->conn->query($this->query);
	        $this->close_connection();	    
	}

	# Traer resultados de una consulta en un Array
	protected function get_results_from_query() {
        $this->open_connection();
        
        $this->query;
        $result = $this->conn->query($this->query);
       
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->close_connection();
        array_pop($this->rows);
	}
         protected function get_list() {            
            $i=0;
            $this->open_connection();
            $result = $this->conn->query($this->query);           
            while ($this->rows[]= $result->fetch_assoc()){
                $nestedData=array();
               foreach($this->rows[$i] as $key=>$value){
                  $nestedData[] =$this->rows[$i][$key];
               }//fin de foreach 
               $this->datosArray[] = $nestedData;
               $i++;
            }//fin de while
           //print_r($this->datosArray);
            $result->close();
            $this->close_connection();
            array_pop($this->rows);
	}//fin de get_listado_ingresos  
}


