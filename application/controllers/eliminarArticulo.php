<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eliminarArticulo extends CI_Controller {

    public function eliminar($id){
        echo $id;
        $this->load->model("modeloArticulo");
        $this->eliminarArticulo->eliminar($id);
    }

}
?>