<?php
  class Presidente extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db->insert("presidente",$datos);
    }
    //funcion para consultar instrcutores
    public function obtenerTodos(){
      $listadoPresidentes=$this->db->get("presidente");
      if ($listadoPresidentes->num_rows()>0) {  //para saber si hay datos o no hay datos
        return $listadoPresidentes->result();
      }else{ //no hay datos
        return false;

      }
    }
    //borrar instructores
    function borrar($id_pre){
      $this->db->where("id_pre",$id_pre);
      return $this->db->delete("presidente");


     }

     //Funcion para consultar un pedido especifcli
     public function ObtenerporId($id_pre)
     {
       $this->db->where("id_pre",$id_pre);
       $presidente=$this->db->get("presidente");
       if ($presidente->num_rows()>0){
         return $presidente->row();
       }
        return false;

     }

     public function actualizar($id_pre,$datos)
     {
       $this->db->where("id_pre",$id_pre);
       return $this->db->update("presidente",$datos);


    }
  }//Cierre de la clase

 ?>
