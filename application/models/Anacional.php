<?php
  class Anacional extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db->insert("anacional",$datos);
    }
    //funcion para consultar instrcutores
    public function obtenerTodos(){
      $listadoAnacionales=$this->db->get("anacional");
      if ($listadoAnacionales->num_rows()>0) {  //para saber si hay datos o no hay datos
        return $listadoAnacionales->result();
      }else{ //no hay datos
        return false;

      }
    }
    //borrar instructores
    function borrar($id_ana){
      $this->db->where("id_ana",$id_ana);
      return $this->db->delete("anacional");


    }
  }//Cierre de la clase

 ?>
