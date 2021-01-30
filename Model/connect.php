<?php

class connection{
 private $user ;
 private $pass ;
 private $pdo;

 public function __construct(){
   $this->user="dbemp";
   $this->pass ="ip&WEkGdskrev99";
}
 function connect(){
     


     try{
        $pdo = new PDO('mysql:host=localhost;dbname=employees', $this->user, $this->pass);
        return $pdo;

     }catch(PDOException $e){
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();

     }
 }
    
}

?>