<?php



if($_POST)
{
include("../Model/connect.php");
}else if( $_SERVER['REQUEST_METHOD'] === 'GET' && empty($_GET['idempleado'])){

    require_once("Model/connect.php");
}else{
    include_once("../Model/connect.php");
}


//claa to connect to data base and execute querys

class EmployeeModel extends connection{

    function GetEmployees(){
        $query = $this->connect()->query("Select * from employe");
      
        return $query;
    }
    function GetEmployeById($id){
        $query = $this->connect()->query("Select * from employe where IdEmployee=".$id);
      
        return $query;
    }

    function InsertEmployee($name, $lastname, $phone, $email, $hire){
try{

         
        $sql = "INSERT INTO employe (EmployeeName, 	EmployeeLastName, 	Phone, EmployeeEmail,HireDate) VALUES (?,?,?,?,?)";
        $this->connect()->prepare($sql)->execute([$name, $lastname, $phone, $email, $hire]);
      
    }catch(PDOException $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
    
         }

        
    }


    function UpdateEmployee($id,$name, $lastname, $phone, $email, $hire){
        try{
           
            echo $id.$name.$lastname.$phone.$email.$hire;
                $sql = "UPDATE employe SET EmployeeName=?, 	EmployeeLastName=?, Phone=? , EmployeeEmail=?, HireDate=? WHERE IdEmployee=?";
               $x= $this->connect()->prepare($sql)->execute([$name, $lastname, $phone, $email, $hire,$id]);
               echo $x;
              
            }catch(PDOException $e){
                    print "¡Error!: " . $e->getMessage() . "<br/>";
                    die();
            
                 }
        
                
            }



            
    function DeleteEmployee($id){
        try{
           
            
                $sql = "DELETE  FROM EMPLOYE WHERE IdEmployee=?";
               $x= $this->connect()->prepare($sql)->execute([$id]);
               echo $x;
              
            }catch(PDOException $e){
                    print "¡Error!: " . $e->getMessage() . "<br/>";
                    die();
            
                 }
        
                
            }

}


?>