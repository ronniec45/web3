<?php
  class Cliente extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar1($datos){
        return $this->db->insert("cliente",$datos);
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES
    function obtenerTodos(){
      $listadoClientes=
      $this->db->get("cliente");
      if($listadoClientes
          ->num_rows()>0){//si hay tados
            return $listadoClientes->result();

          }else{
            return false;
          }
    }
  }//Cierre de la clase

 ?>
