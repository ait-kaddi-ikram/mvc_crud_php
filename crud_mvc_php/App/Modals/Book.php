<?php
class Book extends DB{
    private $table= 'book'; 
    private $conn;

   


    public function __construct(){
         $this->conn=$this->connect();
           //var_dump($this->connect());
    }

   public function getAllBooks(){
        return $this->conn->get($this->table);
    }
    public function insertBook($data){
        return $this->conn->insert($this->table,$data);
    }
    public function deleteBook($id){
          $db=$this->conn->where('id',$id);
          return $db->delete($this->table);
    }
    public function getRow($id){
         $db = $this->conn->where("id",$id);
         return $db->getOne($this->table);
    }
    public function updateBook($id, $data){
          $db=$this->conn->where('id',$id);
          return $db->update($this->table, $data);
    }

}
