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
          if(user.id_rol == "A")
          {
            window.location.href = '../index.php'; 
          }
          if(user.id_rol == "J")
          {
            alert('redireccionar vista jurado');
          }
        }else{
          alert('datos incorrectos');
        }
      }
    })

  })
})
  