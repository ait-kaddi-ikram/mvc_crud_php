<?php
require_once 'Modals/Bookstore.php';
class BookstoreController
{    
 public function index(){
      //new Product();
   $db = new Bookstore();
    $data['bookstore'] = $db->getAllBookstores();
        View:: load('bookstore/index',$data);
        //var_dump($db->getAllBooks());
    }
    public function add(){
        View::load("bookstore/add");

    }
    public function store(){
        if(isset($_POST['submit']))
        {
           
            $adresse= $_POST['adresse'];
            $email= $_POST['email'];
            $telephone= $_POST['telephone'];
           
           // echo $name. "-----".$price. "-----".$description. "-----".$qty;
          $data= Array(
                        "adresse" =>$adresse,
                        "email" =>$email,
                        "telephone" =>$telephone,
                                  );
        $db = new Bookstore();
        if($db->insertBookstore($data))
        {
          View::load("bookstore/add",["success" =>"Data created Successfully"]);
        }
        }else {
            View::load("bookstore/add");
        }
       
    }
     //edit product
     public function edit($id){
         $db = new Bookstore();
         if($db->getRow($id)){
            $data['row']=$db->getRow($id);
            View::load('bookstore/edit',$data);
         }else{
              echo "error";
         }
         
     }
     public function update($id){
    
        $adresse= $_POST['adresse'];
        $email= $_POST['email'];
        $telephone= $_POST['telephone'];
       
       // echo $name. "-----".$auteur. "-----".$annee;
      $dataInsert= Array(
                    "adresse" =>$adresse,
                    "email" =>$email,
                    "telephone" =>$telephone
                              );
    $db = new Bookstore();
    if($db->updateBookstore($id,$dataInsert))
    {
      View::load("bookstore/edit",["success" =>"Data updated Successfully",'row'=> $db->getRow($id)]);
    }
   else {
        View::load("bookstore/edit",['row'=> $db->getRow($id)]);
    }
     }

    //delete book
    public function delete($id){
        $db = new Bookstore();
       if( $db->deleteBookstore($id))
       {
        View::load("bookstore/delete");
       }else {
           echo "Error";
       }
       
    }
  

   

}