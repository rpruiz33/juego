<?php

class InsertarArticulo extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

// La funcion guarda nombre y apellido en la tabla clientes
public function gurdarArticulo($nombre_artic,$descrip_artic,$precio_artic){        
         $consulta = $this->db->query("INSERT INTO articulos (nombre,descripcion,precio)   VALUES ('$nombre_artic','$descrip_artic','$precio_artic')");
           
       
}
public function getArticulo(){
    $query=$this->db->get('articulos');
    if($query->num_rows()>0)
        return $query;
    else 
        return false;
}

    
}













 
