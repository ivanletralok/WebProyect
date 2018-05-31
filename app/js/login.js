window.localStorage.removeItem('user');

  ///////***Login
$(document).ready(function(){
  $('#formLogin').submit(function(){
    event.preventDefault();

    var username = $('input[name="userName"]').val();
    var password = $('input[name="password"]').val();
    $.ajax({
      method: 'POST',
      url: '../loginAdmin.php',
      data: {username:username,password:password,tipo:'admin'},
      success : function(data,textStatus,XHR){
        if( data != "null")
        {
          let user = $.parseJSON(data);
          window.localStorage.setItem('user', data);
         
          if(user.id_rol == "J")
          {
            window.location.href = '../index.php'; 
           
          }
          else if(user.id_rol == "V")
          {
            if(user.id_estado_usuario < 2 ){
              swal("no autorizado");
            }
            if(user.id_estado_usuario >= 2){
               window.location.href = '../tarjeton.php'; 
            }
    
          }
        }else{
          swal('datos incorrectos');
        }
      }
    })

  })

})
  

