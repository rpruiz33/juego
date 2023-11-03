<?php
defined('BASEPATH') OR exit('No direct script access allowed');





class ModificarEliminar extends CI_Controller {

  

    function __construct() {
        parent::__construct();
    }

    // La función guarda nombre, descripción y precio en la tabla 'articulos'
    public function guardarArticulo($nombre_artic, $descrip_artic, $precio_artic){
        $data = array(
            'nombre' => $nombre_artic,
            'descripcion' => $descrip_artic,
            'precio' => $precio_artic
        );
        $this->db->insert('articulos', $data);
    }

    public function getArticulo(){
        $query = $this->db->get('articulos');
        if ($query->num_rows() > 0)
            return $query->result(); // Devuelve un arreglo de resultados
        else 
            return false;
    }

    public function Modificar($id){ 
       // echo($id);

        $this->load->model('InsertarArticulo');
        $this->InsertarArticulo->eliminar($id);
        $this->load->view('principal/articulos');
    }
}
?>
