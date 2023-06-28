<?php

  class Consejales extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Consejal');
    }
    //funciones que reenderiza a vista index
    public function index(){
      $data['consejales']=$this->Consejal->obtenerTodos();
      $this->load->view('header');
      $this->load->view('consejales/index',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('consejales/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoConsejal=array(
        //convocamos al modelo
        "dignidad_con"=>$this->input->post('dignidad_con'),
        "apellido_con"=>$this->input->post('apellido_con'),
        "nombre_con"=>$this->input->post('nombre_con'),
        "movimiento_con"=>$this->input->post('movimiento_con'),
        "latitud_con"=>$this->input->post('latitud_con'),
        "longitud_con"=>$this->input->post('longitud_con')
      );
      if ($this->Consejal->insertar($datosNuevoConsejal)) {
        redirect('consejales/index'); //aqui poner le nombre de la funcion

      }else{
         echo "<h1>ERROR AL INSEERTAR</h1>";

      }


    }
    //Funcion para eliminar instructores
    public function eliminar($id_con){
      if($this->Presidente->borrar($id_con)){
        redirect('consejales/index');


      }else{
        echo "Error al borrar :(";
      }
    }
  }//cierre de clase


 ?>
