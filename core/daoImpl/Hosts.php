<?php
/**
 * Description of Hosts
 *
 * @author Microtemm
 */
class Hosts extends ConectionBD {
    //put your code here
    private  $nid_host;
    private  $db_host;    
    private  $db_user;
    private  $db_pass ;
    private  $db_name ;
    private  $db_port ;
    
    public function insert($array= array ()){
        foreach ($array as $key=>$value){
            $this->$key=$value;
        }
        
    echo     $this->query ="INSERT INTO hosts(db_host, db_name, db_user, db_pass, db_port)"
                ." VALUES ('".$this->db_host."'"
                            . ',\''.$this->db_name.'\''
                            . ',\''.$this->db_user.'\''
                            . ',\''.$this->db_pass.'\''
                            . ',\''.$this->db_port.'\');';
        $this->execute_single_query();        
    }
    
     public function update($array= array ()){
        foreach ($array as $key=>$value){
            $this->$key=$value;
        }
         
         $this->query ='UPDATE hosts set db_host ='.$this->db_host.', db_name ='.$this->db_name
                . ', db_user ='.$this->db_user.' , db_pass='.$this->db_pass. ', db_port ='.$this->db_port.''
                . ' where nid_host='.$this->nid_host;
        $this->execute_single_query();        
    }
    
    public function getById ($nid_host =''){
        $this->query ='SELECT nid_host'
                        . ', db_host'
                        . ', db_name'
                        . ', db_user'
                        . ', db_pass'
                        . ', db_port FROM hosts WHERE 1 AND nid_host ='.$nid_host;
    
        $this->get_results_from_query();
        if (count($this->rows) == 1) {
            foreach ($this->rows[0] as $propiedad => $valor) {
                $this->$propiedad = $valor;          
            }           
        }    
    }
    
    public function delete ($nid_host =''){
        $this->query =' DELETE FROM hosts WHERE  nid_host ='.$nid_host;    
        $this->get_results_from_query();
    }
    
    public function getAll (){
        $this->query ='SELECT nid_host'
                        . ', db_host'
                        . ', db_name'
                        . ', db_user'
                        . ', db_pass'
                        . ', db_port FROM hosts ORDER BY nid_host';
    
        $this->get_list();
    }
    
}
