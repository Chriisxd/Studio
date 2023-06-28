<?php
  class Aprovincial extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db->insert("aprovincial",$datos);
    }
    //funcion para consultar instrcutores
    public function obtenerTodos(){
      $listadoAprovinciales=$this->db->get("aprovincial");
      if ($listadoAprovinciales->num_rows()>0) {  //para saber si hay datos o no hay datos
        return $listadoAprovinciales->result();
      }else{ //no hay datos
        return false;

      }
    }
    //borrar instructores
    function borrar($id_apr){
      $this->db->where("id_apr",$id_apr);
      return $this->db->delete("aprovincial");


    }
  }//Cierre de la clase

 ?>
