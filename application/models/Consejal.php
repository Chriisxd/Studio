<?php
  class Consejal extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db->insert("consejal",$datos);
    }
    //funcion para consultar instrcutores
    public function obtenerTodos(){
      $listadoConsejales=$this->db->get("Consejal");
      if ($listadoConsejales->num_rows()>0) {  //para saber si hay datos o no hay datos
        return $listadoConsejales->result();
      }else{ //no hay datos
        return false;

      }
    }
    //borrar instructores
    function borrar($id_con){
      $this->db->where("id_con",$id_con);
      return $this->db->delete("consejal");


    }
  }//Cierre de la clase

 ?>
