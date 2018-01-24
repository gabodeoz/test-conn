<?php  
        require_once 'dao/ConnectionBD.php'; 
        require_once 'daoImpl/Hosts.php'; 
        require '../constants/constants.php';
        require '../constants/constants_views.php';
    
        $uri = $_SERVER['REQUEST_URI'];
        $view = str_replace(ROOT,'', $uri);      
        $view = str_replace('/','', $view);
        
        handler($view);
       
function handler($metod = '') {
    $host = new Hosts();
    switch ($metod) {
        case SET_HOST:
            if($_POST)
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

/*
 *  const SET_HOST = 'set_host';    
    const UPDATE_HOST = 'update_host';
    const DELETE_HOST = 'delete_host';
    const GET_HOST = 'get_host';
 * /
 */
?>