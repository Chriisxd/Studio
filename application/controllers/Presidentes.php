<?php

  class Presidentes extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Presidente');
    }
    //funciones que reenderiza a vista index
    public function index(){
      $data['presidentes']=$this->Presidente->obtenerTodos();
      $this->load->view('header');
      $this->load->view('presidentes/index',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('presidentes/nuevo');
      $this->load->view('footer');
    }
    public function listado()
    {
        $data['presidentes']=$this->Presidente->obtenerTodos();
        $this->load->view('header');
		    $this->load->view('presidentes/listado',$data);
		    $this->load->view('footer');
    }
    public function editar($id_pre)
    {
      $data['presidenteditar']=$this->Presidente->ObtenerporId($id_pre);
      $this->load->view('header');
      $this->load->view('presidentes/editar',$data);
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoPresidente=array(
        //convocamos al modelo
        "dignidad_pre"=>$this->input->post('dignidad_pre'),
        "apellido_pre"=>$this->input->post('apellido_pre'),
        "nombre_pre"=>$this->input->post('nombre_pre'),
        "movimiento_pre"=>$this->input->post('movimiento_pre'),
        "latitud_pre"=>$this->input->post('latitud_pre'),
        "longitud_pre"=>$this->input->post('longitud_pre')
      );
      if ($this->Presidente->insertar($datosNuevoPresidente)) {
        redirect('presidentes/index'); //aqui poner le nombre de la funcion

      }else{
         echo "<h1>ERROR AL INSEERTAR</h1>";

      }


    }
    //Funcion para eliminar instructores
    public function eliminar($id_pre){
      if($this->Presidente->borrar($id_pre)){
        redirect('presidentes/index');


      }else{
        echo "Error al borrar :(";
      }
    }
  }//cierre de clase


 ?>
