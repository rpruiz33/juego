<?php

class InsertarEnClientes extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

// La funcion guarda nombre y apellido en la tabla clientes
function gurdarCliente($nombre,$apellido){        
         $consulta = $this->db->query("INSERT INTO clientes (nombre,apellido)   VALUES ('$nombre', '$apellido')");
           
    
}


    
}