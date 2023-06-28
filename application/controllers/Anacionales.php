<?php

  class Anacionales extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Anacional');
    }
    //funciones que reenderiza a vista index
    public function index(){
      $data['anacionales']=$this->Anacional->obtenerTodos();
      $this->load->view('header');
      $this->load->view('anacionales/index',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('anacionales/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoAnacional=array(
        //convocamos al modelo
        "dignidad_ana"=>$this->input->post('dignidad_ana'),
        "apellido_ana"=>$this->input->post('apellido_ana'),
        "nombre_ana"=>$this->input->post('nombre_ana'),
        "movimiento_ana"=>$this->input->post('movimiento_ana'),
        "latitud_ana"=>$this->input->post('latitud_ana'),
        "longitud_ana"=>$this->input->post('longitud_ana')
      );
      if ($this->Anacional->insertar($datosNuevoAnacional)) {
        redirect('anacionales/index'); //aqui poner le nombre de la funcion

      }else{
         echo "<h1>ERROR AL INSEERTAR</h1>";

      }


    }
    //Funcion para eliminar instructores
    public function eliminar($id_ana){
      if($this->Anacional->borrar($id_ana)){
        redirect('anacionales/index');


      }else{
        echo "Error al borrar :(";
      }
    }
  }//cierre de clase


 ?>
