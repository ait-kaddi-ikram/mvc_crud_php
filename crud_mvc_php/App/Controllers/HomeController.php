<?php


class HomeController{

  
/* public function index($id,$id2){
        //ar_dump( $id2);
            
// echo "this class is :".__class__."and method is:".__Method__;
     //require_once(VIEWS.'home.php');
     $data['title']= "Home Page";
     $data['content']= "content of home page";
     View::load("home",$data);

}*/
public function index(){
     view::load('home');
}
}