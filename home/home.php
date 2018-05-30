<?php              
        require_once '../core/dao/ConnectionBD.php'; 
        require_once '../core/bo/Html.php';
        require '../constants/constants.php';
        require '../constants/constants_views.php';
    
        $str_url = $_SERVER['REQUEST_URI'];        
        $metod = str_replace(ROOT,'', $str_url);
        $metod = str_replace(HOME,'', $metod);      
        $metod = str_replace('/','', $metod);
      
        handler($metod);
       
        function handler($metod = '') {  
               $obj = new Html();
            switch ($metod) {
                case VIEW_MONITOR:
                    $obj->getHtml(VIEW_MONITOR);
                    break;
                default:
                    $obj->getHtml(VIEW_MAIN);
            }//switch
                        
            unset($obj);
        }

?>
