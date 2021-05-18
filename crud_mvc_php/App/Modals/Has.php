<?php
class Has extends DB{
    private $table= 'has'; 
    private $conn;
    private  $URL;
   


    public function __construct(){
         $this->conn=$this->connect();
           //var_dump($this->connect());
    }

   public function getAllHas(){
        return $this->conn->get($this->table);
    }
    public function insertHas($data){
        return $this->conn->insert($this->table,$data);
    }
    public function deleteHas($id){
          $db=$this->conn->where('id_has',$id);
          return $db->delete($this->table);
    }
    public function getAllHasStore($id){
        $db=$this->conn->where('id_bookstore',$id);
        return $this->conn->get($this->table);
    }
    public function getRow($id){
         $db = $this->conn->where("id_has",$id);
         return $db->getOne($this->table);
    }
   
    /*public function updateHas($id, $data){
          $db=$this->conn->where('id_has',$id);
          return $db->update($this->table, $data);
    }*/

}