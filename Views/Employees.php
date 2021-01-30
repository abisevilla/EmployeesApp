
<div class="container">
<div> <h1> Gestión de Empleados</h1></div>
<div class="row">
<div class="form-group">

<button class="btn btn-success" data-toggle="modal" data-target="#myModal">  Agregar </button>
</div>
</div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Phone </th>
                <th>Email</th>
                <th>Hire Date</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>      
       
<?php

while ($row = $list->fetch()) {
   
?>
            <tr> 

        <td>    <?php echo  $row['EmployeeName']?> </td>
        <td>    <?php echo  $row['EmployeeLastName']?> </td>
        <td>    <?php echo  $row['Phone']?> </td>
        <td>    <?php echo  $row['EmployeeEmail']?> </td>
        <td>    <?php echo  $row['HireDate']?> </td>
        <td>  <button data-idemp="<?php echo $row['IdEmployee']?>" class="btn-modify btn btn-primary"> Modificar</button> <button data-idemp="<?php echo $row['IdEmployee']?>" class="btnDelete btn btn-danger"> Eliminar</button>  </td>                
            </tr>

            <?php
}


?>
        </tbody>
        <tfoot>
        <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Phone </th>
                <th>Email</th>
                <th>Hire Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>



    
</div>



<div  id="updatemodal" class="modal fade"  role="dialog">
        <div class="modal-dialog" role="document">
                    <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">New Employee</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
      <form  id="updateform">
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text"  id="lastname"class="form-control" placeholder="Last name">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <input type="phone" id="phone" class="form-control" placeholder="Phone">
    </div>
    <div class="col">
      <input type="email" id="mail"class="form-control" placeholder="Email">
    </div>
  </div>


  <div class="row">
    <div class="col">
      <input type="date"  id="hire" class="form-control" placeholder="Hire dAte">
    </div>
    <div class="col">
      
    </div>
  </div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" id="btnUpdate" class="customupdate-close btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
                    
                    </div>
        </div>
</div> 



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new Employee</h4>
      </div>
      <div class="modal-body">
        
      <form>
  <div class="row">
    <div class="col">
      <input type="text" id="name_emp" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text"  id="lastname_emp"class="form-control" placeholder="Last name">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <input type="phone" id="phone_emp" class="form-control" placeholder="Phone">
    </div>
    <div class="col">
      <input type="email" id="mail_emp"class="form-control" placeholder="Email">
    </div>
  </div>


  <div class="row">
    <div class="col">
      <input type="date"  id="hire_emp" class="form-control" placeholder="Hire dAte">
    </div>
    <div class="col">
      
    </div>
  </div>
</form>




      </div>
      <div class="modal-footer">
      <button type="button" id="btnSave" class="custom-close btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

