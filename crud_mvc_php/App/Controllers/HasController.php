<?php
require_once 'Modals/has.php';
require_once 'Modals/bookstore.php';
require_once 'Modals/book.php';
class HasController
{    
     private $URL;
 public function index(){
     
  // $db = new Has();
     $db = new bookstore();
    $data['bookstore'] = $db->getAllBookstores();
        View:: load('has/index',$data);
        //var_dump($db->getAllBooks());
    }
    public function add($id){
    
        $db = new book();
        $data['book'] = $db->getAllBooks();
            View:: load('has/add',$data);
        
    }   
  
    public function store($id){
        $url= $_SERVER['REQUEST_URI'];
        $url = trim($url,"/");
        $url = explode('/',$url);
        unset($url[0],$url[1]);
        //var_dump($url[3]);
          $data= Array(
                        "id_book" =>$id,
                        "id_bookstore" =>$url[3],
                                  );
        $db = new Has();
        if($db->insertHas($data))
        {   $data['has'] = $db->getAllHas();
            View::load("has/content",$data);
        
        }
        else {
            View::load("has/add");
        }
       
    
}



    //delete book
    public function deleteBook($id){
        
    
    $db = new Has();
     $data['has'] = $db->getAllHasStore($id);
     // $data['has'] = $db->getAllHas();
       View::load("has/deleteBook",$data);  
    }
    public function delete($id){
        $db = new Has();
       if( $db->deleteHas($id))
       {
        View::load("has/delete");
       }else {
           echo "Error";
       }
       
    }

  
  

   

}