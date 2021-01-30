$(document).ready(function() {
    $('#example').DataTable();

    $('#btnSave').click(function(){
             
       var  array = JSON.stringify({
        'name': $("#name_emp").val() ,
        'lastname': $("#lastname_emp").val() ,
        'phone': $("#phone_emp").val(),
        'mail': $("#mail_emp").val(),
        'hire': $("#hire_emp").val(),
        'action': "insert"});


        $.ajax({
            url : 'Controller/EmployeeController.php',
            type : 'POST',
            data : {"info":array} ,
            dataType : 'JSON',
            cache:false,
            success : function(){
                location.reload();
                        }
        });
    });

    $(".custom-close").on('click', function() {
        $('#myModal').modal('hide');
    });
    $(".customupdate-close").on('click', function() {
        $('#updatemodal').modal('hide');
    });

    
   
    $(".btn-modify").on('click', function() {
        
        $.get("Controller/EmployeeController.php", {idempleado:$(this).data('idemp')},function(data){         
           
            $.each(JSON.parse(data) , function( key, value ) {
                $("#updateform").append("<input type='hidden' id='id_emp' value='"+ value.IdEmployee +"'>");
               $("#name").val(value.EmployeeName);
               $("#lastname").val(value.EmployeeLastName);
               $("#phone").val(value.Phone);
               $("#mail").val(value.EmployeeEmail);               
               $("#hire").val(value.HireDate);
              });

              $('#updatemodal').modal('show');
        });
    });


    $('#btnUpdate').click(function(){
             
        var  array = JSON.stringify({
         'id': $("#id_emp").val(),
         'name': $("#name").val() ,
         'lastname': $("#lastname").val() ,
         'phone': $("#phone").val(),
         'mail': $("#mail").val(),
         'hire': $("#hire").val(),
         'action': "update"});
 
 
         $.ajax({
             url : 'Controller/EmployeeController.php',
             type : 'POST',
             data : {"info":array} ,
             dataType : 'JSON',
             cache:false,
             success : function(){
                location.reload();
                 
                         }
         });
     });


     
    $('#btnDelete').click(function(){
             
        var  array = JSON.stringify({
         'id': $("#id_emp").val(),
         'name': $("#name").val() ,
         'lastname': $("#lastname").val() ,
         'phone': $("#phone").val(),
         'mail': $("#mail").val(),
         'hire': $("#hire").val(),
         'action': "update"}); 
 
         $.ajax({
             url : 'Controller/EmployeeController.php',
             type : 'POST',
             data : {"info":array} ,
             dataType : 'JSON',
             cache:false,
             success : function(){
                location.reload();
                 
                         }
         });
     });





} );