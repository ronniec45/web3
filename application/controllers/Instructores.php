
<?php

    class Instructores extends CI_Controller
    {
        function __construct()
        {
          parent::__construct();
          //Cargar modelo
          $this->load->model('Instructor');
        }

    public function index(){
      //LINEA DE CODIGO NUEVOS
      $data['instructores']=$this->Instructor->obtenerTodos();
      //FIN
      $this->load->view('header');
      $this->load->view('instructores/index',$data);
      $this->load->view('footer');

    }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('instructores/nuevo');
      $this->load->view('footer');

    }
    public function guardar(){
      $datosNuevoInstructor=array(
        "cedula_ins"=>$this->input->post('cedula_ins'),
        "primer_apellido_ins"=>$this->input->post('primer_apellido_ins'),
        "segundo_apellido_ins"=>$this->input->post('segundo_apellido_ins'),
        "nombres_ins"=>$this->input->post('nombres_ins'),
        "titulo_ins"=>$this->input->post('titulo_ins'),
        "telefono_ins"=>$this->input->post('telefono_ins'),
        "direccion_ins"=>$this->input->post('direccion_ins')
      );

      if($this->Instructor->insertar($datosNuevoInstructor)){
        redirect('instructores/index');
      }else{
        echo "<h1>ERROR AL INSERTAR</h1>";
      }
    }
    //funcion para eliminar instructores
    public function eliminar($id_ins){
      if ($this->Instructor->borrar($id_ins)) {//invocando el modelo
        redirect('instructores/index');
      } else {
        echo "ERROR AL BORRAR ;) ";
      }

    }
    //funcion para renderizar vista editar con el instructor
    public function editar($id_ins){
      $data["instructorEditar"]=
      $this->Instructor->obtenerPorId($id_ins);
      $this->load->view('header');
      $this->load->view('instructores/editar',$data);
      $this->load->view('footer');


    }
  }//cierre de la clase

 ?>
