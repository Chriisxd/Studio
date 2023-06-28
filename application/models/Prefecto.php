<?php
  class Prefecto extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db->insert("prefecto",$datos);
    }
    //funcion para consultar instrcutores
    public function obtenerTodos(){
      $listadoPrefectos=$this->db->get("prefecto");
      if ($listadoPrefectos->num_rows()>0) {  //para saber si hay datos o no hay datos
        return $listadoPrefectos->result();
      }else{ //no hay datos
        return false;

      }
    }
    //borrar instructores
    function borrar($id_fec){
      $this->db->where("id_fec",$id_fec);
      return $this->db->delete("prefecto");


    }
  }//Cierre de la clase

 ?>
