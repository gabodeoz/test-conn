<?php              
        require_once 'handler/Html.php';
        require 'constants/constants.php';
        require 'constants/constants_views.php';
            
        $uri = $_SERVER['REQUEST_URI'];
        $html_file = str_replace(ROOT,'', $uri);      
        $html_file = str_replace('/','', $html_file);
        
        handler($html_file);
        
        function handler($html_file) {
            $obj = new Html;
            switch ($html_file) {
                default: $obj->html(VIEW_MAIN);
            }//switch
            unset($obj);
        }//handler
?>
