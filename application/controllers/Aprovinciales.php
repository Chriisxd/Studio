<?php

  class Aprovinciales extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Aprovincial');
    }
    //funciones que reenderiza a vista index
    public function index(){
      $data['aprovinciales']=$this->Aprovincial->obtenerTodos();
      $this->load->view('header');
      $this->load->view('aprovinciales/index',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('aprovinciales/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoAprovincial=array(
        //convocamos al modelo
        "dignidad_apr"=>$this->input->post('dignidad_apr'),
        "apellido_apr"=>$this->input->post('apellido_apr'),
        "nombre_apr"=>$this->input->post('nombre_apr'),
        "movimiento_apr"=>$this->input->post('movimiento_apr'),
        "latitud_apr"=>$this->input->post('latitud_apr'),
        "longitud_apr"=>$this->input->post('longitud_apr')
      );
      if ($this->Aprovincial->insertar($datosNuevoAprovincial)) {
        redirect('aprovinciales/index'); //aqui poner le nombre de la funcion

      }else{
         echo "<h1>ERROR AL INSEERTAR</h1>";

      }


    }
    //Funcion para eliminar instructores
    public function eliminar($id_apr){
      if($this->Aprovincial->borrar($id_apr)){
        redirect('aprovinciales/index');


      }else{
        echo "Error al borrar :(";
      }
    }
  }//cierre de clase


 ?>
