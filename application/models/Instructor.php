<?php
  /**
   *
   */
  class Instructor extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("instructor",$datos);
      //Inseccion sQL
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES LINEAS DE CODIGOS NUEVOS
    function obtenerTodos(){
      $listadoInstructores=$this->db->get("instructor");
      //VALIDAR PARA QUE NO DE ERRORES
      //SIEMPRE VALIDAR CON UN IF PARA QUE NO HAYA ERRORES
      if($listadoInstructores->num_rows()>0) { // SI HAY DATOS
        return $listadoInstructores->result();
      }else { // NO HAY DATOS
        return false;
      }
    }
    function borrar($id_ins){
      //delete from instructor where id_ins=
      $this->db->where("id_ins", $id_ins);
      return $this->db->delete("instructor");
    }

    //Funcion para consultar un intructor especifico
    function obtenerPorId($id_ins){
      $this->db->where("id_ins",$id_ins);
      $instructor=$this->db->get("instructor");
      if ($instructor->num_rows()>0) {
        return $instructor->row();
      }
      return false;
    }
    //funcion para actualizar un instructores
    function actualizar($id_ins,$datos){
      $this->db->where("id_ins",$id_ins);
        return $this->db->update('instructor',$datos);
      }
  }//cierre de la funcion



 ?>
