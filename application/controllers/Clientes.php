<?php
class Clientes extends CI_Controller
{
 function __construct()
 {
   parent::__construct();
   $this->load->model('Cliente');

 }
 //funcion que renderiza la vista index
 public function index(){
    $data ['clientes']=$this->Cliente->obtenerTodos();
   $this->load->view('header');
   $this->load->view('clientes/index',$data);
   $this->load->view('footer');
 }
 //funcion que renderiza a la vista nuevo
 public function nuevo(){

 $this->load->view('header');
 $this->load->view('clientes/nuevo');
 $this->load->view('footer');

}

public function guardar1(){
  $datosNuevoCliente=array(
    "cedula_cli"=>$this->input->post('cedula_cli'),
    "primer_apellido_cli"=>$this->input->post('primer_apellido_cli'),
    "segundo_apellido_cli"=>$this->input->post('segundo_apellido_cli'),
    "nombre_cli"=>$this->input->post('nombre_cli'),
    "edad_cli"=>$this->input->post('edad_cli'),
    "telefono_cli"=>$this->input->post('telefono_cli'),
    "ciudad_cli"=>$this->input->post('ciudad_cli'),
    "canton_cli"=>$this->input->post('canton_cli'),
    "descripcion_cli"=>$this->input->post('descripcion_cli'),
    "email_cli"=>$this->input->post('email_cli')

  );
  if($this->Cliente->Insertar1($datosNuevoCliente)){
    redirect('clientes/index');
}

}


}// cierre de la clase
 ?>
