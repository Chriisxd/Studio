<?php

  class Prefectos extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Prefecto');
    }
    //funciones que reenderiza a vista index
    public function index(){
      $data['prefectos']=$this->Prefecto->obtenerTodos();
      $this->load->view('header');
      $this->load->view('prefectos/index',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('prefectos/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoPrefecto=array(
        //convocamos al modelo
        "dignidad_fec"=>$this->input->post('dignidad_fec'),
        "apellido_fec"=>$this->input->post('apellido_fec'),
        "nombre_fec"=>$this->input->post('nombre_fec'),
        "movimiento_fec"=>$this->input->post('movimiento_fec'),
        "latitud_fec"=>$this->input->post('latitud_fec'),
        "longitud_fec"=>$this->input->post('longitud_fec')
      );
      if ($this->Prefecto->insertar($datosNuevoPrefecto)) {
        redirect('prefectos/index'); //aqui poner le nombre de la funcion

      }else{
         echo "<h1>ERROR AL INSEERTAR</h1>";

      }


    }
    //Funcion para eliminar instructores
    public function eliminar($id_fec){
      if($this->Prefecto->borrar($id_fec)){
        redirect('prefectos/index');


      }else{
        echo "Error al borrar :(";
      }
    }
  }//cierre de clase


 ?>
