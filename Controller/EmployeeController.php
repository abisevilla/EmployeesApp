<?php


   if($_POST)
   {
        $array = json_decode($_REQUEST['info']);
           switch($array->{'action'})
        {
            case 'insert':
                InsertEmployee($array);
                break;
            case 'update':
                UpdateEmployeById($array);
                    break;
            case 'delete':
                DeleteEmployeById($array);
                            break;
            
        }
    }else if($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(empty($_GET['idempleado']))
     {   
        include_once("Model/Employee.php");
        $emp_model = new EmployeeModel();
        $list= $emp_model->GetEmployees();
        require_once("views/Employees.php");
    } else {      
       $data= GetEmployeeById($_GET['idempleado']);
       echo $data;
    }

    }  
    


   

function InsertEmployee($data=null)
{    
    if($data){
    if(isset($data->{'name'})) {
        require_once("../Model/Employee.php");
        $emp_model = new EmployeeModel();
      $result=  $emp_model->InsertEmployee($data->{'name'},$data->{'lastname'}, $data->{'phone'}, $data->{'mail'}, $data->{'hire'});

    }
}


}

function GetEmployeeById($id)
{
    include_once("../Model/Employee.php");
    $emp_model = new EmployeeModel();
    $list= $emp_model->GetEmployeById($id);
    $results = $list->fetchAll(PDO::FETCH_ASSOC);
   
    return json_encode($results);

}

function UpdateEmployeById($data=null){
    
    if($data){
        if(isset($data->{'name'})) {
            require_once("../Model/Employee.php");
            $emp_model = new EmployeeModel();
          $result=  $emp_model->UpdateEmployee($data->{'id'},$data->{'name'},$data->{'lastname'}, $data->{'phone'}, $data->{'mail'}, $data->{'hire'});
    
        }    
}
}

function DeleteEmployeById($data=null){
    
    if($data){
        if(isset($data->{'id'})) {
            require_once("../Model/Employee.php");
            $emp_model = new EmployeeModel();
          $result=  $emp_model->DeleteEmployee($data->{'id'});
    
        }    
}


}



?>