<?php

class Html {

    function render_dinamic($html = '', $array_de_resultados, $regex = '', $comodines = array()) {
        //print_r($array_de_resultados);
        $array_coincidencias = array();
        $template = get_template($html);
        preg_match($regex, $template, $array_coincidencias);
        //print_r($array_coincidencias);
        $codigo = $array_coincidencias[0];

        $render_options = '';
        foreach ($array_de_resultados as $array_asociativo) {
            $sustituciones = array_values($array_asociativo);
            $render_options .= str_replace($comodines, $sustituciones, $codigo);
        }
        $html = str_replace($codigo, $render_options, $template);
        return $html;
    }

   

    function render_dinamic_data($html, $data) {
        foreach ($data[0] as $clave => $valor) {
            $html = str_replace('#{' . $clave . '}', $valor, $html);
        }
        return $html;
    }

    function html_data($html = '', $data = array()) {        
        foreach ($data  as $clave => $valor) {
            $html = str_replace('#{' . $clave . '}', $valor, $html);
        }
        return $html;
    }
    
    function get_template($html = '') {
        $file_path = '../'.URL_HTML . $html . '.html';
        if (is_readable($file_path)){         
            $template = file_get_contents($file_path);
            return $template;
        }
        return '';
    }
    
    function getHtml($html_file = '',$data = array()) {        
        $html = $this->get_template(VIEW_TEMPLATE); 
        $html = str_replace('#{header}',  $this->get_template(VIEW_HEADER), $html);
        switch ($html_file){
            case VIEW_MAIN:
             $data ['title'] = 'Guardar server'; 
             $data ['action'] = '../'.URL_WS.'/'.SET_HOST; 
             $html = str_replace('#{main}',  $this->get_template(VIEW_MAIN), $html);   
             $html = $this ->html_data($html,$data);
            break;    
        }
        unset($data);
        print $html;
    }
    
    function __destruct() {
        unset($this);
    }


}

?>