<?php

class modeloArticulo extends CI_Model {

    function __construct() { 
        parent::__construct();
    }

    public function eliminar($idart){
        $this->db->where('id', $idart);
        $this->db->delete('articulos');
    }

}