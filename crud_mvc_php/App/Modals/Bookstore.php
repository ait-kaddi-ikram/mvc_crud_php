<?php
class Bookstore extends DB{
    private $table= 'bookstore'; 
    private $conn;

   


    public function __construct(){
         $this->conn=$this->connect();
           //var_dump($this->connect());
    }

   public function getAllBookstores(){
        return $this->conn->get($this->table);
    }
    public function insertBookstore($data){
        return $this->conn->insert($this->table,$data);
    }
    public function deleteBookstore($id){
          $db=$this->conn->where('id_bookstore',$id);
          return $db->delete($this->table);
    }
    public function getRow($id){
         $db = $this->conn->where("id_bookstore",$id);
         return $db->getOne($this->table);
    }
    public function updateBookstore($id, $data){
          $db=$this->conn->where('id_bookstore',$id);
          return $db->update($this->table, $data);
    }

}
