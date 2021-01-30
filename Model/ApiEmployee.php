<?php


if( $_SERVER['REQUEST_METHOD'] == 'GET'){


    $pdo = new PDO('mysql:host=localhost;dbname=employees', "dbemp", "ip&WEkGdskrev99");
   
    $emp_list= array();
    $emp_list["items"]=array();

    $res =   $pdo->query("Select * from employe");;

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
        HEADER("HTTP/1.1 200 OK");
        echo json_encode($emp_list);
        exit();
    }else{
        echo json_encode(array('mensaje' => 'No data'));
    }

}
    

?>