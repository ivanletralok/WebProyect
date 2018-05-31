window.localStorage.removeItem('user');

  ///////***Login
$(document).ready(function(){
  $('#formLogin').submit(function(){
    event.preventDefault();
    
    /*let HoraInferior = 7,
        HoraSuperior = 15,
        MinutoInferior = 01,
        MinutoSuperior = 59;

    var Hora = ``

    console.log(Hora);
    //Entre 7am y 4pm
    let dt = new Date();
    let time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
    let HoraActual =  parseInt(dt.getHours()),
        MinutoActual = parseInt(dt.getMinutes());

        if(HoraActual >= HoraInferior && HoraActual <= HoraSuperior){
          if(MinutoActual >= MinutoInferior && MinutoActual <= MinutoSuperior){

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
            

          }          
        }else{
          swal('Aun no estan activadas las votaciones, por favor intente luego');
        }
        */
      var username = $('input[name="userName"]').val();
      var password = $('input[name="password"]').val();

       $.ajax({
        method: 'POST',
        url: '../loginAdmin.php',
        data: {username:username,password:password,tipo:'admin'},
        success : function(data,textStatus,XHR){
          if( data != "null")
          {
            //console.log(data); 
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
  

