<?php  
        require_once '../core/dao/ConnectionBD.php'; 
        require_once '../core/daoImpl/Hosts.php'; 
        require '../constants/constants.php';
        require '../constants/constants_views.php';
    
        $str_url = $_SERVER['REQUEST_URI'];        
        $metod = str_replace(ROOT,'', $str_url);
        $metod = str_replace(URL_WS,'', $metod);      
        $metod = str_replace('/','', $metod);
      
        handler($metod);
       
function handler($metod = '') {  
    $host = new Hosts();
    switch ($metod) {
        case SET_HOST:             
                $host->insert($_POST);                                            
            break;
        case UPDATE_HOST:                 
                $host->insert($_POST);                                
            break;
        case DELETE_HOST:     
            if(array_key_exists('nid_host', $_POST)){
                $nid_host=$_POST['nid_host'];
                $host->getById($nid_host);                
            }                                      
            break;
        case GET_HOST:     
            if(array_key_exists('nid_host', $_POST)){
                   $nid_host=$_POST['nid_host'];
                   $host->getById($nid_host);
            }
            break;
    }//switch 
    unset($host);
}


?>