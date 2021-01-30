<?php


include_once("Employee.php");

function GetAll(){

    $emp = new EmployeeModel();
    $emp_list= array();
    $emp_list["items"]=array();

    $res = $emp->GetEmployees();

    if($res->rowCount()){
        while ($row = $res->fetch(PDO::FETCH_ASSOC)){

            $item=array(
                "IdEmployee" => $row['IdEmployee'],
                "EmployeeName" => $row['EmployeeName'],
                "EmployeeLastName" => $row['EmployeeLastName'],
                  "Phone" => $row['Phone'],
                   "EmployeeEmail" => $row['EmployeeEmail'],
                 "HireDate" => $row['HireDate'],               

            );
            array_push($emp_list["items"], $item);
        }
    
        echo json_encode($emp_list);
    }else{
        echo json_encode(array('mensaje' => 'No hay elementos'));
    }


    
}
?>