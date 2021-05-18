<?php
require_once 'Modals/Book.php';
class BookController
{    
 public function index(){
      //new Product();
   $db = new Book();
    $data['book'] = $db->getAllBooks();
        View:: load('book/index',$data);
        //var_dump($db->getAllBooks());
    }
    public function add(){
        View::load("book/add");

    }
    public function store(){
        if(isset($_POST['submit']))
        {
            $name= $_POST['name'];
            $auteur= $_POST['auteur'];
            $annee= $_POST['annee'];
           
           // echo $name. "-----".$price. "-----".$description. "-----".$qty;
          $data= Array("name" => $name,
                        "auteur" =>$auteur,
                        "annee" =>$annee
                                  );
        $db = new Book();
        if($db->insertBook($data))
        {
          View::load("book/add",["success" =>"Data created Successfully"]);
        }
        }else {
            View::load("book/add");
        }
       
    }
     //edit product
     public function edit($id){
         $db = new Book();
         if($db->getRow($id)){
            $data['row']=$db->getRow($id);
            View::load('book/edit',$data);
         }else{
              echo "error";
         }
         
     }
     public function update($id){
        $name= $_POST['name'];
        $auteur= $_POST['auteur'];
        $annee= $_POST['annee'];
       
       // echo $name. "-----".$auteur. "-----".$annee;
      $dataInsert= Array("name" => $name,
                    "auteur" =>$auteur,
                    "annee" =>$annee
                              );
    $db = new Book();
    if($db->updateBook($id,$dataInsert))
    {
      View::load("book/edit",["success" =>"Data updated Successfully",'row'=> $db->getRow($id)]);
    }
   else {
        View::load("book/edit",['row'=> $db->getRow($id)]);
    }
     }

    //delete book
    public function delete($id){
        $db = new Book();
       if( $db->deleteBook($id))
       {
        View::load("book/delete");
       }else {
           echo "Error";
       }
       
    }
  

   

}